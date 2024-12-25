<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengelolaanBarang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'no_barang'    => '1111',
                'kode_barang'  => 'AK4T.08',
                'nama_barang'  => 'AHM MPX 4T 0.8 Liter',
                'tanggal'      => '2023-08-11',
                'qty'          => 10,
                'harga'        => 150000,
                'jumlah'       => 1500000,
                'ttd'          =>  'ttd/ttd1.jpg', // Path file tanda tangan
            ],
            [
                'no_barang'    => '1112',
                'kode_barang'  => 'SVX10.8',
                'nama_barang'  => 'Shell Oil Advance SX 4T 0.8 Liter',
                'tanggal'      => '2023-08-11',
                'qty'          => 15,
                'harga'        => 96000,
                'jumlah'       => 1440000,
                'ttd'          => 'ttd/ttd2.jpg',
            ],
            [
                'no_barang'    => '1113',
                'kode_barang'  => 'ST1504',
                'nama_barang'  => 'Bracket, Rect FTG SF150',
                'tanggal'      => '2023-08-11',
                'qty'          => 15,
                'harga'        => 198000,
                'jumlah'       => 2970000,
                'ttd'          => 'ttd/ttd3.jpg',
            ],
            [
                'no_barang'    => '1114',
                'kode_barang'  => 'TMB.8',
                'nama_barang'  => 'Top 1 Oil Action Matic 1.0W-30 0.8 Liter',
                'tanggal'      => '2023-08-11',
                'qty'          => 10,
                'harga'        => 180000,
                'jumlah'       => 1800000,
                'ttd'          => 'ttd/ttd4.jpg',
            ],
        ];

        // Insert data ke tabel barang_masuk
        $this->db->table('pengelolaanbarang')->insertBatch($data);

    }
}
