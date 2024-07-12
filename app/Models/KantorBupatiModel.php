<?php

namespace App\Models;

use CodeIgniter\Model;

class KantorBupatiModel extends Model
{
    protected $table = 'kantor_bupati';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_kantor', 'alamat', 'no_telpon', 'email', 'deskripsi', 'lat', 'long'];

    public function getKantorBupati($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function saveKantor($data)
    {
        return $this->insert($data);
    }
}
