<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporan extends Migration
{
    public function up()
    {
        // Create fields for laporan table
        $this->forge->addField([
            'kode_laporan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'kode_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'no_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'id_stok' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'id_kondisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'nama_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'stok_awal' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'stok_masuk' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'stok_keluar' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'jumlah_barang' => [
                'type'       => 'INT',
                'null'       => false,
            ],
        ]);

        // Add Primary Key
        $this->forge->addKey('kode_laporan', true); // Set kode_laporan as the primary key

        // Add Foreign Keys
        $this->forge->addForeignKey('kode_barang', 'pembelian', 'kode_barang'); // Foreign key to pembelian table
        $this->forge->addForeignKey('no_barang', 'pengelolaanbarang', 'no_barang'); // Foreign key to pengelolaanbarang table
        $this->forge->addForeignKey('id_stok', 'stokbarang', 'id_stok'); // Foreign key to stokbarang table

        // Create the table
        $this->forge->createTable('laporan');
    }

    public function down()
    {
        // Drop the table if rolling back
        $this->forge->dropTable('laporan');
    }
}
