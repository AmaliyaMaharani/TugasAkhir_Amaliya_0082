<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pengecekanbarang extends Model
{
    protected $table = 'pengecekanbarang'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel (jika ada)
    protected $useAutoIncrement = true; // Gunakan auto increment jika primary key ada

    protected $returnType = 'array'; // Return data dalam bentuk array
    protected $allowedFields = [
        'kode_barang',
        'no_barang',
        'nama_barang',
        'jumlah_barang',
    ]; // Field yang diizinkan untuk dimasukkan data

    protected $useSoftDeletes = false; // Nonaktifkan soft deletes
    protected $useTimestamps = false; // Tidak ada timestamps
}
