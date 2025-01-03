<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Laporan extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'laporan'; // Nama tabel di database
    protected $primaryKey = 'kode_laporan'; // Primary key dari tabel

    // Tidak menggunakan auto increment karena kode_laporan adalah primary key
    protected $useAutoIncrement = false;

    // Return type array
    protected $returnType = 'array';

    // Menentukan field yang diperbolehkan diakses
    protected $allowedFields = [
        'kode_laporan',
        'kode_barang',
        'no_barang',
        'id_stok',
        'id_kondisi',
        'nama_barang',
        'stok_awal',
        'stok_masuk',
        'stok_keluar',
        'jumlah_barang'
    ];

    // Nonaktifkan soft deletes
    protected $useSoftDeletes = false;

    // Tidak ada timestamp
    protected $useTimestamps = false;

    // Method untuk mengambil seluruh data laporan
    public function getAllLaporan()
    {
        return $this->findAll(); // Mengambil seluruh data dari tabel laporan
    }
}
