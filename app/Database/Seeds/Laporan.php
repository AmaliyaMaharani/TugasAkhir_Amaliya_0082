<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Laporan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_laporan' => '245A',
                'kode_barang' => 'A4AT0.8',
                'no_barang' => '1111',
                'id_stok' => '112A',
                'id_kondisi' => '4231',
                'nama_barang' => 'AHM MPX 4AT 0.8 liter',
                'stok_awal' => 17,
                'stok_masuk' => 6,
                'stok_keluar' => 7,
                'jumlah_barang' => 16,
            ],
            [
                'kode_laporan' => '245C',
                'kode_barang' => 'STF1504',
                'no_barang' => '1113',
                'id_stok' => '112C',
                'id_kondisi' => '4232',
                'nama_barang' => 'Bracket, Rect FTG SF150',
                'stok_awal' => 20,
                'stok_masuk' => 6,
                'stok_keluar' => 4,
                'jumlah_barang' => 22,
            ],
            [
                'kode_laporan' => '245E',
                'kode_barang' => 'PPSL1',
                'no_barang' => '1115',
                'id_stok' => '112E',
                'id_kondisi' => '4233',
                'nama_barang' => 'Pertamina Prima XP 10w-04',
                'stok_awal' => 15,
                'stok_masuk' => 4,
                'stok_keluar' => 3,
                'jumlah_barang' => 16,
            ],
            [
                'kode_laporan' => '245B',
                'kode_barang' => 'SVSX0.8',
                'no_barang' => '1112',
                'id_stok' => '112B',
                'id_kondisi' => '4234',
                'nama_barang' => 'Shell Oil Advance SX 4T 0.8 liter',
                'stok_awal' => 15,
                'stok_masuk' => 4,
                'stok_keluar' => 2,
                'jumlah_barang' => 17,
            ],
            [
                'kode_laporan' => '245D',
                'kode_barang' => 'TIM0.8',
                'no_barang' => '1114',
                'id_stok' => '112D',
                'id_kondisi' => '4235',
                'nama_barang' => 'Top 1 Oil Action Matic 0.8 liter',
                'stok_awal' => 18,
                'stok_masuk' => 7,
                'stok_keluar' => 6,
                'jumlah_barang' => 19,
            ],
            [
                'kode_laporan' => '245F',
                'kode_barang' => 'IR25017',
                'no_barang' => '1116',
                'id_stok' => '112F',
                'id_kondisi' => '4236',
                'nama_barang' => 'IRC NF3 250-17',
                'stok_awal' => 22,
                'stok_masuk' => 10,
                'stok_keluar' => 3,
                'jumlah_barang' => 29,
            ],
        ];

        // Insert batch data ke tabel laporan_barang
        $this->db->table('laporan')->insertBatch($data);
    }
}