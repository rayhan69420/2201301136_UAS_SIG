<?php

namespace App\Controllers;

use App\Models\KantorBupatiModel;

class TambahData extends BaseController
{
    public function index()
    {
        return view('dashboard/tambah');
    }

    public function save()
    {
        $model = new KantorBupatiModel();

        $data = [
            'nama_kantor' => $this->request->getPost('nama_kantor'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'lat' => $this->request->getPost('lat'),
            'long' => $this->request->getPost('long'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $model->saveKantor($data);

        return redirect()->to(base_url('dashboard/data'));
    }
}
