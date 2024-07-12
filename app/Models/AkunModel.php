<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];

    public function getAkunByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
