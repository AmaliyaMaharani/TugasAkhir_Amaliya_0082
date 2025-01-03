<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'role']; // Kolom yang dapat diisi

    protected $useTimestamps = false;
    // Fungsi untuk mencari user berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
