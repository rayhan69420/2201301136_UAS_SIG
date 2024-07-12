<?php

namespace App\Controllers;

use App\Models\KantorBupatiModel;

class DataKantor extends BaseController
{
    public function index()
    {
        $model = new KantorBupatiModel();
        $data['kantor_bupati'] = $model->findAll();

        return view('dashboard/data', $data);
    }

    public function edit($id)
    {
        $model = new KantorBupatiModel();
        $data['kantor'] = $model->find($id);

        if (!$data['kantor']) {
            throw new \Exception("Kantor dengan ID $id tidak ditemukan");
        }

        return view('dashboard/edit', $data);
    }

    public function update($id)
    {
        $model = new KantorBupatiModel();

        // Validasi input form jika diperlukan
        $validationRules = [
            'nama_kantor' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'email' => 'required|valid_email',
            'deskripsi' => 'required',
            'lat' => 'required|numeric',
            'long' => 'required|numeric'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Ambil data dari form
        $data = [
            'nama_kantor' => $this->request->getPost('nama_kantor'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'email' => $this->request->getPost('email'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'lat' => $this->request->getPost('lat'),
            'long' => $this->request->getPost('long')
        ];

        // Update data kantor berdasarkan ID
        $model->update($id, $data);

        // Redirect ke halaman data kantor setelah berhasil update
        return redirect()->to(base_url('dashboard/data'))->with('success', 'Data kantor berhasil diperbarui');
    }

    public function delete($id)
    {
        $model = new KantorBupatiModel();

        // Hapus data kantor berdasarkan ID
        $model->delete($id);

        // Redirect ke halaman data kantor setelah berhasil delete
        return redirect()->to(base_url('dashboard/data'))->with('success', 'Data kantor berhasil dihapus');
    }
}
