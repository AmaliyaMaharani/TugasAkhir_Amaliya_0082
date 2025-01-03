<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Membuat tabel `users`
        $this->forge->addField([
            'id' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['admin', 'pemilik'],
                'default'    => 'pemilik',
            ],
        ]);

        // Menambahkan primary key pada kolom `id`
        $this->forge->addKey('id', true);

        // Membuat tabel
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Menghapus tabel `users` jika rollback
        $this->forge->dropTable('users');
    }
}
