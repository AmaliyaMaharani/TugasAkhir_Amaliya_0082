<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pembelian extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'A4AT0.8',
                'no_invoice' => '42431',
                'nama_barang' => 'AHM MPX 4AT 0.8 Liter',
                'no_barang' => '1111',
                'nama_toko' => '',
                'alamat' => 'JL. Jendral Basuki',
                'telp' => '0217171717',
                'qty' => 10,
                'harga_satuan' => 150000,
                'jumlah' => 1500000,
                'ttd' => 'ttd1.jpg',
                'tanggal' => '2023-08-11'
            ],
            [
                'kode_barang' => 'IR25017',
                'no_invoice' => '42435',
                'nama_barang' => 'IRC NRX 250-17',
                'no_barang' => '1116',
                'nama_toko' => '',
                'alamat' => 'JL. Jendral Basuki',
                'telp' => '021234567',
                'qty' => 9,
                'harga_satuan' => 160000,
                'jumlah' => 1440000,
                'ttd' => 'ttd6.jpg',
                'tanggal' => '2023-08-11'
            ],
            [
                'kode_barang' => 'PPSL1',
                'no_invoice' => '42435',
                'nama_barang' => 'Pertamina Prima XP 10w-40 API',
                'no_barang' => '1115',
                'nama_toko' => '',
                'alamat' => 'JL. Jendral Basuki',
                'telp' => '021234567',
                'qty' => 15,
                'harga_satuan' => 185000,
                'jumlah' => 2775000,
                'ttd' => 'ttd5.jpg',
                'tanggal' => '2023-08-11'
            ],
            [
                'kode_barang' => 'STF1504',
                'no_invoice' => '42435',
                'nama_barang' => 'Bracket, Rect FTG SF150',
                'no_barang' => '1113',
                'nama_toko' => '',
                'alamat' => 'JL. Jendral Basuki',
                'telp' => '021234567',
                'qty' => 11,
                'harga_satuan' => 180000,
                'jumlah' => 1980000,
                'ttd' => 'ttd3.jpg',
                'tanggal' => '2023-08-11'
            ],
            [
                'kode_barang' => 'SVSX0.8',
                'no_invoice' => '42432',
                'nama_barang' => 'Shell Oil Advance SX 4T 0.8 liter',
                'no_barang' => '1112',
                'nama_toko' => '',
                'alamat' => 'JL. Jendral Basuki',
                'telp' => '021234567',
                'qty' => 8,
                'harga_satuan' => 204000,
                'jumlah' => 1632000,
                'ttd' => 'ttd2.jpg',
                'tanggal' => '2023-08-11'
            ]
        ];

        // Using Query Builder
        $this->db->table('pembelian')->insertBatch($data);

    }
}
