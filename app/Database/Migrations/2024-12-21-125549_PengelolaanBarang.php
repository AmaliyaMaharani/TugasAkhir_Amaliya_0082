<?php 

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengelolaanBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unique'     => true,
            ],
            'kode_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'qty' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'jumlah' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'ttd' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true, // Bisa null jika tidak ada file
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addKey('no_barang', true); 

        // Membuat tabel
        $this->forge->createTable('PengelolaanBarang', true);
    }

    public function down()
    {
        // Menghapus tabel
        $this->forge->dropTable('PengelolaanBarang');
    }
}
