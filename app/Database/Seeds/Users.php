<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        // Data untuk disisipkan
        $data = [
            [
                'id'       => 'A-001', 
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            [
                'id'       => 'P-001',
                'username' => 'pemilik',
                'password' => password_hash('pemilik123', PASSWORD_DEFAULT),
                'role'     => 'pemilik',
            ],
        ];

        // Insert data ke tabel `users`
        $this->db->table('users')->insertBatch($data);
    }
}
