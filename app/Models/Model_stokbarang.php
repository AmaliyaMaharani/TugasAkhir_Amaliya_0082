<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_stokbarang extends Model
{
    protected $table = 'stokbarang'; // Nama tabel
    protected $primaryKey = 'id_stok'; // Sesuaikan dengan kolom primary key yang benar

    protected $useAutoIncrement = true; // Jika id_stok menggunakan auto-increment
    protected $returnType = 'array'; // Mengembalikan data dalam bentuk array

    // Nonaktifkan soft delete
    protected $useSoftDeletes = false;

    // Field yang diizinkan untuk diisi
    protected $allowedFields = [
        'id_stok', 'kode_barang', 'no_barang', 'nama_barang', 'jumlah_awal_barang', 'kondisi_barang_baik', 
        'kurang_baik', 'total_barang_baik', 'total_barang_kurang_baik', 'ttd'
    ];

    // Jika tidak ada kolom created_at atau updated_at, nonaktifkan timestamps
    protected $useTimestamps = false; 
    protected $dateFormat = 'datetime';

    // Method untuk mengupdate data stok barang
    public function update_data($id_stok, $data)
    {
        return $this->update($id_stok, $data);
    }
}
?>
