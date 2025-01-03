<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pengelolaanbarang extends Model
{
    protected $table = 'pengelolaanbarang'; // Nama tabel
    protected $primaryKey = 'no_barang'; // Primary key

    protected $useAutoIncrement = false; // Sesuaikan jika no_barang bukan auto-increment
    protected $returnType = 'array';

    // Nonaktifkan soft delete
    protected $useSoftDeletes = false;

    // Field yang diizinkan untuk diisi
    protected $allowedFields = ['no_barang', 'kode_barang', 'nama_barang', 'tanggal', 'qty', 'harga', 'jumlah', 'ttd'];

    // Untuk pengaturan timestamps
    protected $useTimestamps = false; // Nonaktifkan jika tidak ada kolom created_at atau updated_at
    protected $dateFormat = 'datetime';
    protected $createdField = null; // Set null jika tidak digunakan
    protected $updatedField = null; // Set null jika tidak digunakan

    // Validasi
    protected $validationRules = [
        'no_barang' => 'required|is_unique[pengelolaanbarang.no_barang]',
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'tanggal' => 'required',
        'qty' => 'required|numeric',
        'harga' => 'required|numeric',
        'jumlah' => 'required|numeric',
        'ttd' => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    // Method untuk mendapatkan data
    public function get_data()
    {
        return $this->findAll(); // Mengambil semua data
    }

    // Method untuk menyimpan data

    // Method untuk update data
    public function update_data($no_barang, $data)
    {
        return $this->update($no_barang, $data);  // Update data berdasarkan no_barang
    }

    // Method untuk update kelola data
    public function update_kelola($data, $no_barang)
    {
        return $this->update($no_barang, $data);  // Update data berdasarkan no_barang
    }

    // Method untuk menemukan data berdasarkan no_barang
    public function find_by_no_barang($no_barang)
    {
        return $this->where('no_barang', $no_barang)->first();  // Ambil data berdasarkan no_barang
    }

    // Method untuk menghapus data berdasarkan no_barang
    public function delete_data($no_barang)
    {
        return $this->where('no_barang', $no_barang)->delete();  // Menghapus data berdasarkan no_barang
    }
}
