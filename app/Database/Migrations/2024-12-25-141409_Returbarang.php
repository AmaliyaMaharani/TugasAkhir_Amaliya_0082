<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Returbarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_retur' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'no_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kode_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'qty' => [
                'type' => 'INT',
            ],
            'harga' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'jumlah' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'nama_toko' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'ttd' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        // Menambahkan primary key
        $this->forge->addKey('id_retur', true);

        // Menambahkan foreign key
        $this->forge->addForeignKey('no_barang', 'pengelolaanbarang', 'no_barang');
        $this->forge->addForeignKey('kode_barang', 'pembelian', 'kode_barang');

        // Membuat tabel
        $this->forge->createTable('returbarang');


    }

    public function down()
    {
        $this->forge->dropTable('returbarang');

    }
}