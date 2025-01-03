<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengecekanBarang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'no_barang'   => '1111',
                'kode_barang' => 'A4AT0.8',
                'nama_barang' => 'AHM MPX 4AT 0.8 liter',
                'jumlah_barang'      => 16
            ],
            [
                'no_barang'   => '1112',
                'kode_barang' => 'SVSX0.8',
                'nama_barang' => 'Shell Oil Advance SX 4T 0.8 liter',
                'jumlah_barang'      => 17
            ],
            [
                'no_barang'   => '1113',
                'kode_barang' => 'STF1504',
                'nama_barang' => 'Bracket, Rect FTG SF150',
                'jumlah_barang'      => 22
            ],
            [
                'no_barang'   => '1114',
                'kode_barang' => 'TIM0.8',
                'nama_barang' => 'Top 1 Oil Action Matic 0.8 liter',
                'jumlah_barang'      => 19
            ],
            [
                'no_barang'   => '1115',
                'kode_barang' => 'PPSL1',
                'nama_barang' => 'Pertamina Prima XP 10w-04',
                'jumlah_barang'      => 16
            ],
            [
                'no_barang'   => '1116',
                'kode_barang' => 'IR25017',
                'nama_barang' => 'IRC NF3 250-17',
                'jumlah_barang'      => 29
            ],
        ];

        // Insert data ke tabel `pengecekanbarang`
        $this->db->table('pengecekanbarang')->insertBatch($data);
    }
}
