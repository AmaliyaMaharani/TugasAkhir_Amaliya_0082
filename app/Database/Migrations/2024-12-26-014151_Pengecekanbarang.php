<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengecekanbarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'no_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jumlah_barang' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
        ]);

        // Foreign Keys
        $this->forge->addForeignKey('kode_barang', 'pembelian', 'kode_barang');
        $this->forge->addForeignKey('no_barang', 'pengelolaanbarang', 'no_barang');

        // Create Table
        $this->forge->createTable('pengecekanbarang');
    }

    public function down()
    {
        $this->forge->dropTable('pengecekanbarang');
    }
}
