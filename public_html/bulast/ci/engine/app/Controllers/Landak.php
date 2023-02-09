<?php

namespace App\Controllers;
use App\Models\Mkonfigurasi;
use App\Models\Mlayout;
use App\Models\Mnavigasi;
use App\Models\Msubnavigasi;
use App\Models\Mberita;
use App\Models\Muser;
use App\Models\Mpersonil;
use App\Models\Mtraffic;
use App\Models\Mpangkat;
use App\Models\Msatker;
use App\Models\Msatfungpolsek;
use App\Models\Msatfungpolres;
use App\Models\Mjabatanpolres;
use App\Models\Mjabatanpolsek;
use App\Models\Mkategori;

use CodeIgniter\Files\File;
helper('filesystem');
class Landak extends BaseController
{
    public function index()
    {
        $this->record($this->request->getIPAddress());
        return view('backend/login');
    }

    public function validasi($nrp)
    {
        $user = new Muser();
        $personil = new Mpersonil();


        $cek = $user->where('nrp', $nrp)->findAll();

        if($cek != null){

            $det = $personil->where('nrp', $nrp)->findAll();
            foreach($cek as $c){
                $level = $c->level;
            }
            foreach($det as $d){
                $userdata = ['nrp' => $nrp,
                             'nama' => $d->nama,
                             'pangkat' => $d->pangkat,
                             'jabatan' => $d->jabatan,
                             'satfung' => $d->satfung,
                             'satker' => $d->satker,
                             'level' => $level,
                             'foto' => $d->foto
                            ];
            }
            session()->set($userdata);

            if($level != '1'){
                return redirect()->to(base_url('landak/dashboard/profile'));
            }else{
                return redirect()->to(base_url('landak/dashboard'));
            }
            
        }else{
            return redirect()->to(base_url('landak'));
        }
    }
    
    public function dashboard($url = null){
        if(session()->has('nrp')){
            $trf = new Mtraffic();
            $usr = new Muser();
            $brt = new Mberita();
            $cnf = new Mkonfigurasi();
            $pkt = new Mpangkat();
            $satker = new Msatker();
            $fungsek = new Msatfungpolsek();
            $fungres = new Msatfungpolres();
            $jabres = new Mjabatanpolres();
            $jabsek = new Mjabatanpolsek();
            $kat = new Mkategori();
            $ses = session();
            
            if($url == null){
                
                $d['judul'] = 'Dashboard';
                $d['traffic'] = $trf->countAllResults();
                $d['user'] = $usr->countAllResults();
                $d['berita'] = $brt->countAllResults();
                return view('backend/dashboard', $d);   
            }
    
            if($url == 'profile'){
                $d['judul'] = 'Profile';
                
                    $d['cnf'] = $cnf->findAll(); 
                    $d['pangkat'] = $pkt->findAll();
                    $d['satker'] = $satker->findAll();
                    $d['fsek'] = $fungsek->findAll();
                    $d['fres'] = $fungres->findAll();
                    $d['jsek'] = $jabsek->findAll();
                    $d['jres'] = $jabres->findAll();

                    return view('backend/profilesatker', $d);   
                
            }

            if($url == 'berita'){
                $satid = $satker->where('satker', session()->satker)->find();
                $d['allberita'] = $brt->where('create_at <', date('Y-m-d').' 23:59:59')->orderBy('id', 'ASC')->findAll();
                $d['berita'] = $brt->where('satker', $satid['0']->id)->orderBy('id', 'DESC')->findAll();
                $d['kategori'] = $kat->findAll();
                $d['judul'] = 'Manager Berita';
                return view('backend/berita', $d);
            }

            if($url == 'kategori'){
                $d['judul'] = 'Manager Kategori';
                return view('backend/berita', $d);
            }

            if($url == 'usermanagement'){
                $d['judul'] = 'Manager User';
                return view('backend/berita', $d);
            }

            if($url == 'halaman'){
                $d['judul'] = 'Manager Halaman';
                return view('backend/berita', $d);
            }

            if($url == 'personil'){
                $model = new Muser;
                $sql = "SELECT personil.*, pangkat.id as idpangkat FROM personil JOIN pangkat ON personil.pangkat = pangkat.pangkat ORDER BY idpangkat ASC";
                $d['pers'] = db_connect()->query($sql)->getResult();
                $d['judul'] = 'Manager Personil';
                return view('backend/personil', $d);
            }


        }else{
            return redirect()->to(base_url('landak'));
        }

        $this->record($this->request->getIPAddress());
        
    }

    public function updconf(){
        $validationRule = [
            'file' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return $this->response->setJSON($data);
        }

        $img = $this->request->getFile('file');

        $newName = $img->getRandomName();
        $img->move('../public_html/uploads/conf', $newName);


        if($img->hasMoved() == 1){
            $model = new Mkonfigurasi();
            $col = $this->request->getPost('kolom');

            foreach($model->findAll() as $d){
                if($d->$col != null){
                    $cc = unlink('./'.$d->$col);
                    if($cc){
                        $name = '/uploads/conf/'.$newName;
                        $data = [$col => $name];
                        $updt = $model->update('1', $data);

                        if($updt){
                            $res = ['msg' => 'ok'];
                            return $this->response->setJSON($res);
                        }
                    }else{
                        $res = ['error' => 'Gagal Hapus File!'];
                        return $this->response->setJSON($res);
                    }
                }else{
                    $res = ['error' => 'Periksa Kolom '.$col];
                    return $this->response->setJSON($res);
                }
            }
        }else{
            $res = ['error' => 'File Gagal Diupload'];
            return $this->response->setJSON($res);
        }
    }

    public function updberita(){

        $model = new Mberita();
        $msatker = new Msatker();

        $img = $this->request->getFile('file');
        $newName = $img->getRandomName();

        foreach($msatker->where('satker', session()->satker)->findAll() as $c){
            $satker = $c->id;
        }
        $db = db_connect();
        $judul = $this->request->getPost('judul');
        $link = $this->rmvchar($judul);
        $caption = $this->request->getPost('caption');
        $isi = $this->request->getPost('isiberita');
        $kategori = $this->request->getPost('kategori');
        $publisher = session()->pangkat.' '.session()->nama;
        $penulis = $this->request->getPost('penulis');
        $create = date('Y-m-d H:i:s');
        $view = '0';
        $comment = rand(10000,99999);
        $foto = '/uploads/berita/'.$newName;

        $where = ['judul' => $judul, 'satker', $satker];
        $cek = $model->where($where)->countAllResults();
        
        $databerita = ['judul' => strtoupper($judul),
                       'link' => $link,
                       'isi' => $isi,
                       'kategori' => $kategori,
                       'foto' => $foto,
                       'caption' => $caption,
                       'publisher' => $publisher,
                       'penulis' => $penulis,
                       'satker' => $satker,
                       'create_at' => $create,
                       'view' => $view,
                       'comment_id' => $comment
                      ];

        if($cek == 0){
            $validationRule = [
                'file' => [
                    'label' => 'Image File',
                    'rules' => [
                        'uploaded[file]',
                        'is_image[file]',
                        'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    ],
                ],
            ];

            if (! $this->validate($validationRule)) {
                $data = ['msg' => $this->validator->getErrors()];
                return $this->response->setJSON($data);
            }

            $img->move('../public_html/uploads/berita', $newName);

            if($img->hasMoved() == 1){
                $updberita = $model->insert($databerita);

                if($updberita){
                    $res = ['msg' => 'ok'];
                    return $this->response->setJSON($res);
                }else{
                    unlink('./'.$foto);
                    $res = ['msg' => 'Berita Gagal Diinput!'];
                    return $this->response->setJSON($res);
                }
            }else{
                $res = ['msg' => 'File Gagal Diupload'];
                return $this->response->setJSON($res);
            }
        }else{
            $res = ['msg' => 'Berita Ini Sudah Anda Upload Sebelumnya!'];
            return $this->response->setJSON($res);
        }
        
        
        

        
        
    }

    public function delberita($id = null){
        $model = new Mberita();
        $get = $model->where('id', $id)->findAll();

        if($model->delete($id)){
            unlink('./'.$get['0']->foto);
            $res = ['msg'=>'ok'];
            return $this->response->setJSON($res);
        }        
    }

    public function updateuser($nrp = null){
        $req = $this->request;
        $data = ['nama' => $req->getVar('nama'),
                 'pangkat' => $req->getVar('pangkat'),
                 'jabatan' => $req->getVar('jabatan'),
                 'satker' => $req->getVar('satker'),
                 'satfung' => $req->getVar('satfung'),
                ];
        
        $model = new Mpersonil();
        $upd = $model->update($nrp, $data);
        if($upd){
            $msg = ['msg' => 'ok'];
            session()->set($data);
            return $this->response->setJSON($msg);
        }else{
            $msg = ['msg' => 'gagal'];
            return $this->response->setJSON($msg);
        }
    }

    public function record($ip){
        $trf = new Mtraffic();

        $where = ['ip' => $ip, 'access' => date('Y-m-d')];

        $cek = $trf->where($where)->findAll();

        if(!$cek){
            $trf->insert($where);
        }
    }

    public function rmvchar($str){
        $a =  strtolower(str_replace( array( '\'', '"', ',' , ';', '<', '>' ), '', $str));
        return str_replace(' ', '-', $a);
    }

    public function sendotp($id){
        $model = new Muser();

        $userdata = $model->where('id', $id)->findAll();
        foreach($userdata as $u){
            $wa = $u->wa;
        }

        $data = [
            'otp' => $this->request->getPost('otp')
        ];
               
        $exc = $model->update($id, $data);
        
        if($exc){
            $responses = [
                'status'   => 200,
                'wa'    => $wa,
                'messages' => [
                    'success' => 'ok'
                ]
            ];

            return $this->response->setJSON($responses);
        } else {
            return $this->fail('Data Gagal Diubah');
        }
    }
}
