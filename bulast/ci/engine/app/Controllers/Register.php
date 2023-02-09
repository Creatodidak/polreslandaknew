<?php

namespace App\Controllers;
use App\Models\Mkonfigurasi;
use App\Models\Mlayout;
use App\Models\Mnavigasi;
use App\Models\Msubnavigasi;
use App\Models\Mpangkat;
use App\Models\Msatker;
use App\Models\Msatfungpolsek;
use App\Models\Msatfungpolres;
use App\Models\Mjabatanpolres;
use App\Models\Mjabatanpolsek;
use App\Models\Mpersonil;


class Register extends BaseController
{
    public function index()
    {
        $conf = new Mkonfigurasi();
        $layout = new Mlayout();
        $nav = new Mnavigasi();
        $subnav = new Msubnavigasi();
        $pkt = new Mpangkat();
        $satker = new Msatker();
        $fungsek = new Msatfungpolsek();
        $fungres = new Msatfungpolres();
        $jabres = new Mjabatanpolres();
        $jabsek = new Mjabatanpolsek();

        $d['pangkat'] = $pkt->findAll();
        $d['satker'] = $satker->findAll();
        $d['fsek'] = $fungsek->findAll();
        $d['fres'] = $fungres->findAll();
        $d['jsek'] = $jabsek->findAll();
        $d['jres'] = $jabres->findAll();
        $d['navigasi'] = $nav->findAll();
        $d['data'] = $conf->findAll();
        $d['judul'] = 'REGISTRASI PERSONIL';
        foreach($layout->where('status', 'active')->findAll() as $da){
            $d['layout'] = $da->data;
        }
        
        return view('beranda/register', $d);
    }

    public function action(){
        $model = new Mpersonil();

        $img = $this->request->getFile('file');
        $newName = $img->getRandomName();

        $db = db_connect();
        $nama = strtoupper($this->request->getPost('nama'));
        $pangkat = strtoupper($this->request->getPost('pangkat'));
        $nrp = $this->request->getPost('nrp');
        $tanggallahir = strtoupper($this->request->getPost('tanggallahir'));
        $satker = strtoupper($this->request->getPost('satker'));
        $fungsi = strtoupper($this->request->getPost('fungsi'));
        $jabatan = strtoupper($this->request->getPost('jabatan'));
        $wa = $this->request->getPost('wa');
        $foto = '/uploads/personil/'.$newName;

        $where = ['nrp' => $nrp];
        $cek = $model->where($where)->countAllResults();
        
        $datapers = ['nrp'=>$nrp,
                     'nama'=>$nama,
                     'pangkat'=>$pangkat,
                     'tanggal_lahir'=>$tanggallahir,
                     'satker'=>$satker,
                     'satfung'=>$fungsi,
                     'jabatan'=>$jabatan,
                     'wa'=>$wa,
                     'foto'=>$foto
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

            $img->move('../public_html/uploads/personil', $newName);

            if($img->hasMoved() == 1){
                $updpers = $model->insert($datapers, false);

                if($updpers){
                    $res = ['msg' => 'ok'];
                    return $this->response->setJSON($res);
                }else{
                    unlink('./'.$foto);
                    $res = ['msg' => 'GAGAL MENDAFTAR, SILAHKAN ULANGI!'];
                    return $this->response->setJSON($res);
                }
            }else{
                $res = ['msg' => 'Foto Gagal Diupload'];
                return $this->response->setJSON($res);
            }
        }else{
            $res = ['msg' => 'ANDA SUDAH TERDATA!'];
            return $this->response->setJSON($res);
        }
    }
}
