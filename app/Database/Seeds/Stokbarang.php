<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StokBarang extends Seeder
{
    public function run()
    {
        // Data yang akan dimasukkan ke tabel stokbarang
        $data = [
            [
                'id_stok'                   => '112A',
                'kode_barang'               => 'A4AT0.8',
                'no_barang'                 => '1111',
                'nama_barang'               => 'AHM MPX 4AT 0.8 liter',
                'jumlah_awal_barang'        => 150,
                'kondisi_barang_baik'       => 100,
                'kurang_baik'               => 50,
                'total_barang_baik'         => 698,
                'total_barang_kurang_baik'  => 285,
                'ttd'                       => 'ttd1.jpg',
            ],
            [
                'id_stok'                   => '112B',
                'kode_barang'               => 'SVSX0.8',
                'no_barang'                 => '1112',
                'nama_barang'               => 'Shell Oil Advance SX 4T 0.8 liter',
                'jumlah_awal_barang'        => 150,
                'kondisi_barang_baik'       => 120,
                'kurang_baik'               => 30,
                'total_barang_baik'         => 698,
                'total_barang_kurang_baik'  => 285,
                'ttd'                       => 'ttd1.jpg',
            ],
            [
                'id_stok'                   => '112C',
                'kode_barang'               => 'STF1504',
                'no_barang'                 => '1113',
                'nama_barang'               => 'Bracket, Rect FTG SF150',
                'jumlah_awal_barang'        => 220,
                'kondisi_barang_baik'       => 130,
                'kurang_baik'               => 90,
                'total_barang_baik'         => 698,
                'total_barang_kurang_baik'  => 285,
                'ttd'                       => 'ttd3.jpg',
            ],
            [
                'id_stok'                   => '112D',
                'kode_barang'               => 'TIM0.8',
                'no_barang'                 => '1114',
                'nama_barang'               => 'Top 1 Oil Action Matic 10w-30',
                'jumlah_awal_barang'        => 145,
                'kondisi_barang_baik'       => 130,
                'kurang_baik'               => 15,
                'total_barang_baik'         => 698,
                'total_barang_kurang_baik'  => 285,
                'ttd'                       => 'ttd4.jpg',
            ],
            [
                'id_stok'                   => '112E',
                'kode_barang'               => 'PPSL1',
                'no_barang'                 => '1115',
                'nama_barang'               => 'Pertamina Prima XP 10w-04, API',
                'jumlah_awal_barang'        => 116,
                'kondisi_barang_baik'       => 68,
                'kurang_baik'               => 50,
                'total_barang_baik'         => 698,
                'total_barang_kurang_baik'  => 285,
                'ttd'                       => 'ttd5.jpg',
            ],
            [
                'id_stok'                   => '112F',
                'kode_barang'               => 'IR25017',
                'no_barang'                 => '1116',
                'nama_barang'               => 'IRC NF3 250-17',
                'jumlah_awal_barang'        => 200,
                'kondisi_barang_baik'       => 150,
                'kurang_baik'               => 50,
                'total_barang_baik'         => 698,
                'total_barang_kurang_baik'  => 285,
                'ttd'                       => 'ttd6.jpg',
            ],
        ];

        // Insert batch data ke tabel stokbarang
        $this->db->table('stokbarang')->insertBatch($data);
    }
}
