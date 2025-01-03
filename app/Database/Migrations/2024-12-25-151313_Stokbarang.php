<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stokbarang extends Migration
{
    public function up()
    {
        // Menambahkan field (kolom) pada tabel stokbarang
        $this->forge->addField([
            'id_stok' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'kode_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'no_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'jumlah_awal_barang' => [
                'type' => 'INT',
                'null' => false,
            ],
            'kondisi_barang_baik' => [
                'type' => 'INT',
                'null' => false,
            ],
            'kurang_baik' => [
                'type' => 'INT',
                'null' => false,
            ],
            'total_barang_baik' => [
                'type' => 'INT',
                'null' => false,
            ],
            'total_barang_kurang_baik' => [
                'type' => 'INT',
                'null' => false,
            ],
            'ttd' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
        ]);

        // Menambahkan primary key pada id_stok
        $this->forge->addKey('id_stok', true); // Primary key

        // Menambahkan foreign key pada kode_barang yang mengacu pada kolom kode_barang di tabel pembelian
        $this->forge->addForeignKey('kode_barang', 'pembelian', 'kode_barang');

        // Menambahkan foreign key pada no_barang yang mengacu pada kolom no_barang di tabel pengelolaanbarang
        $this->forge->addForeignKey('no_barang', 'pengelolaanbarang', 'no_barang');

        // Membuat tabel stokbarang
        $this->forge->createTable('stokbarang');
    }

    public function down()
    {
        // Menghapus tabel stokbarang
        $this->forge->dropTable('stokbarang');
    }
}
