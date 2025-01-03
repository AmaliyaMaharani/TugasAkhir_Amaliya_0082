<?php

namespace App\Controllers;

use App\Models\Model_stokbarang;

class StokBarang extends BaseController
{
    protected $Model_stokbarang;

    public function __construct()
    {
        $this->Model_stokbarang = new Model_stokbarang();
    }

    // Halaman Utama - Menampilkan daftar stok barang
    public function index()
    {
        $data = [
            'title' => 'Stok Barang',
            'stok_barang' => $this->Model_stokbarang->findAll(), // Mengambil semua data stok barang
            'content' => 'stok/v_stokbarang', // View untuk menampilkan daftar stok barang
        ];
        echo view('layout/v_wrapper', $data);
    }

    // Halaman Edit Data Stok Barang
    public function edit($id_stok)
    {
        // Mengambil data stok barang berdasarkan id
        $stok_barang = $this->Model_stokbarang->find($id_stok);

        if ($stok_barang) {
            $data = [
                'title' => 'Edit Stok Barang',
                'content' => 'stok/v_editstokbarang', // View untuk halaman edit
                'stok_barang' => $stok_barang, // Mengirimkan data stok barang ke view
            ];
            echo view('layout/v_wrapper', $data);
        } else {
            session()->setFlashdata('error', 'Data stok barang tidak ditemukan');
            return redirect()->to(base_url('StokBarang'));
        }
    }

    // Aksi Update Data Stok Barang
    public function update()
    {
        // Mendapatkan data dari form
        $data = [
            'id_stok' => $this->request->getPost('id_stok'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'no_barang' => $this->request->getPost('no_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_awal_barang' => $this->request->getPost('jumlah_awal_barang'),
            'kondisi_barang_baik' => $this->request->getPost('kondisi_barang_baik'),
            'kurang_baik' => $this->request->getPost('kurang_baik'),
            'total_barang_baik' => $this->request->getPost('total_barang_baik'),
            'total_barang_kurang_baik' => $this->request->getPost('total_barang_kurang_baik'),
            'ttd' => $this->request->getPost('ttd'),
        ];

        $id_stok = $this->request->getPost('id_stok'); // Mengambil ID stok barang dari input hidden form
        $this->Model_stokbarang->update_data($id_stok, $data); // Update data stok barang berdasarkan ID

        session()->setFlashdata('success', 'Data Stok Barang Berhasil Diperbarui');
        return redirect()->to(base_url('StokBarang')); // Redirect kembali ke halaman StokBarang
    }

}
?>