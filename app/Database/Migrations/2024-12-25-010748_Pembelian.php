<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'no_invoice' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'nama_toko' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'telp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'qty' => [
                'type' => 'INT',
            ],
            'harga_satuan' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'jumlah' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'ttd' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('kode_barang', true);  // Primary key
        $this->forge->addForeignKey('no_barang', 'pengelolaanbarang', 'no_barang');  // Foreign key tanpa CASCADE
        $this->forge->createTable('pembelian');
    }

    public function down()
    {
        $this->forge->dropTable('pembelian');

    }
}
