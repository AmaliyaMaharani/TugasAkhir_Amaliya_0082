<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_returbarang extends Model
{
    protected $table = 'returbarang'; // Nama tabel
    protected $primaryKey = 'id_retur'; // Primary key

    protected $useAutoIncrement = false; // Sesuaikan jika id_retur bukan auto-increment
    protected $returnType = 'array';

    // Nonaktifkan soft delete
    protected $useSoftDeletes = false;

    // Field yang diizinkan untuk diisi
    protected $allowedFields = ['id_retur', 'no_barang', 'kode_barang', 'nama_barang', 'tanggal', 'qty', 'harga', 'jumlah', 'ttd'];

    // Untuk pengaturan timestamps
    protected $useTimestamps = false; // Nonaktifkan jika tidak ada kolom created_at atau updated_at
    protected $dateFormat = 'datetime';
    protected $createdField = null; // Set null jika tidak digunakan
    protected $updatedField = null; // Set null jika tidak digunakan

    // Validasi
    protected $validationRules = [
        'id_retur' => 'required|is_unique[returbarang.id_retur]',
        'no_barang' => 'required',
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'tanggal' => 'required',
        'qty' => 'required|numeric',
        'harga' => 'required|numeric',
        'jumlah' => 'required|numeric',
        'nama_toko' => 'required',
        'alamat' => 'required',
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
    public function insert_data($data)
    {
        return $this->save($data);  // Insert atau update data ke tabel
    }

    public function update_data($id_retur, $data)
    {
        return $this->update($id_retur, $data);  // Update data berdasarkan id_retur
    }

    public function find_by_id_retur($id_retur)
    {
        return $this->where('id_retur', $id_retur)->first();  // Ambil data berdasarkan id_retur
    }

    public function delete_data($id_retur)
    {
        return $this->where('id_retur', $id_retur)->delete();  // Menghapus data berdasarkan no_barang
    }
}
