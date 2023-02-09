<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Muser;

use CodeIgniter\HTTP\RequestInterface;

 
class Userapi extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new Muser();
        $data['user'] = $model->orderBy('view', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new Muser();
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga'  => $this->request->getVar('harga'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }

    public function show($nrp = null)
    {
        $model = new Muser();

        $data = $model->where('nrp', $nrp)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    
    public function update($id = null)
    {
        $model = new Muser();

        $userdata = $model->where('id', $id)->findAll();
        foreach($userdata as $u){
            $wa = $u->wa;
        }

        $data = [
            'otp' => $this->request->getRawInput('otp')
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

            return $this->respond($responses);
        } else {
            return $this->fail('Data Gagal Diubah');
        }
    }

    public function delete($id = null)
    {
        $model = new Muser();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}