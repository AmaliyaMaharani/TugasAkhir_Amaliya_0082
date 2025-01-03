<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Returbarang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_retur' => '221A',
                'no_barang' => '1111',
                'kode_barang' => 'A4AT0.8',  // Pastikan konsisten dengan pembelian
                'nama_barang' => 'AHM MPX 4AT 0.8 Liter',
                'tanggal' => '2023-08-11',
                'qty' => 10,
                'harga' => 150000,
                'jumlah' => 1500000,
                'nama_toko' => '',
                'alamat' => 'Jl. Jendral Basuki',
                'ttd' => 'ttd1.jpg',
            ],
            [
                'id_retur' => '221B',
                'no_barang' => '1112',
                'kode_barang' => 'SVSX0.8',  // Sama dengan yang ada di pembelian
                'nama_barang' => 'Shell Oil Advance SX 4T 0.8 liter',
                'tanggal' => '2023-08-11',
                'qty' => 9,
                'harga' => 160000,
                'jumlah' => 1440000,
                'nama_toko' => '',  // Nama Toko kosong
                'alamat' => 'Jl. Jendral Basuki',
                'ttd' => 'ttd2.jpg',
            ],
            [
                'id_retur' => '221C',
                'no_barang' => '1113',
                'kode_barang' => 'STF1504',
                'nama_barang' => 'Bracket, Rect FTG SF150',
                'tanggal' => '2023-08-11',
                'qty' => 15,
                'harga' => 185000,
                'jumlah' => 2775000,
                'nama_toko' => '',
                'alamat' => 'Jl. Jendral Basuki',
                'ttd' => 'ttd3.jpg',
            ],
            [
                'id_retur' => '221D',
                'no_barang' => '1114',
                'kode_barang' => 'TIM0.8',
                'nama_barang' => 'Top 1 Oil Action Matic 10w-30 0.8 liter',
                'tanggal' => '2023-08-11',
                'qty' => 11,
                'harga' => 180000,
                'jumlah' => 1980000,
                'nama_toko' => '', // Nama Toko kosong
                'alamat' => 'Jl. Jendral Basuki',
                'ttd' => 'ttd4.jpg',
            ],

            // Add other entries similarly...
        ];

        $this->db->table('returbarang')->insertBatch($data);
    }
}
