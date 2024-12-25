<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pembelian extends Model
{
    protected $table = 'pembelian'; // Nama tabel
    protected $primaryKey = 'kode_barang'; // Primary key

    protected $useAutoIncrement = false; // Sesuaikan jika kode_barang bukan auto-increment
    protected $returnType = 'array';

    // Nonaktifkan soft delete
    protected $useSoftDeletes = false;

    // Field yang diizinkan untuk diisi
    protected $allowedFields = [
        'kode_barang',
        'no_barang',
        'nama_barang',
        'no_invoice',
        'nama_toko',
        'alamat',
        'telp',
        'qty',
        'harga_satuan',
        'jumlah',
        'ttd',
        'tanggal'
    ];

    // Untuk pengaturan timestamps
    protected $useTimestamps = false; // Nonaktifkan jika tidak ada kolom created_at atau updated_at
    protected $dateFormat = 'datetime';
    protected $createdField = null; // Set null jika tidak digunakan
    protected $updatedField = null; // Set null jika tidak digunakan

    // Validasi
    protected $validationRules = [
        'kode_barang' => 'required|is_unique[pembelian.kode_barang]',
        'no_barang' => 'required',
        'nama_barang' => 'required',
        'no_invoice' => 'required',
        'nama_toko' => 'required',
        'alamat' => 'required',
        'telp' => 'required|numeric',
        'qty' => 'required|numeric',
        'harga_satuan' => 'required|numeric',
        'jumlah' => 'required|numeric',
        'ttd' => 'required',
        'tanggal' => 'required'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    // Method untuk mendapatkan data
    public function get_data()
    {
        return $this->findAll(); // Mengambil semua data
    }

    public function update_data($kode_barang, $data)
    {
        return $this->update($kode_barang, $data);  // Update data berdasarkan no_barang
    }

    public function update_kelola($data, $kode_barang)
    {
        // Cek apakah data berhasil diperbarui
        if ($this->update($kode_barang, $data)) {
            return true;
        }
        return false; // Jika gagal
    }

    public function find_by_kode_barang($kode_barang)
    {
        return $this->where('kode_barang', $kode_barang)->first();  // Ambil data berdasarkan no_barang
    }
}

?>