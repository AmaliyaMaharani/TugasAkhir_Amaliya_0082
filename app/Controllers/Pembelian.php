<?php
namespace App\Controllers;

use App\Models\Model_pembelian;

class Pembelian extends BaseController
{
    protected $Model_pembelian;

    public function __construct()
    {
        $this->Model_pembelian = new Model_pembelian();
    }

    // Halaman Utama - Menampilkan daftar stok barang
    public function index()
    {
        $data = [
            'title' => 'Stok Barang',
            'pembelian' => $this->Model_pembelian->findAll(), // Mengambil semua data stok barang
            'content' => 'pembelian/v_pembelianbarang', // View untuk menampilkan daftar stok barang
        ];
        echo view('layout/v_wrapper', $data);
    }

    // Halaman Edit Data Stok Barang
    public function edit($kode_barang)
    {
        // Mengambil data stok barang berdasarkan kode_barang
        $stok_barang = $this->Model_pembelian->find_by_kode_barang($kode_barang);

        if ($stok_barang) {
            $data = [
                'title' => 'Edit Pembelian Barang',
                'content' => 'pembelian/v_editpembelian', // View untuk halaman edit
                'pembelian' => $stok_barang, // Mengirimkan data stok barang ke view
            ];
            echo view('layout/v_wrapper', $data);
        } else {
            session()->setFlashdata('error', 'Data pembelian barang tidak ditemukan');
            return redirect()->to(base_url('Pembelian')); // Jika data tidak ditemukan, redirect ke halaman utama
        }
    }

    // Aksi Update Data Stok Barang
    public function update()
    {
        // Mendapatkan data dari form
        $data = [
            'kode_barang' => $this->request->getPost('kode_barang'),
            'no_invoice' => $this->request->getPost('no_invoice'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'no_barang' => $this->request->getPost('no_barang'),
            'nama_toko' => $this->request->getPost('nama_toko'),
            'alamat' => $this->request->getPost('alamat'),
            'telp' => $this->request->getPost('telp'),
            'qty' => $this->request->getPost('qty'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'jumlah' => $this->request->getPost('jumlah'),
            'ttd' => $this->request->getPost('ttd'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];

        $kode_barang = $this->request->getPost('kode_barang'); // Mengambil kode_barang dari form
        if ($this->Model_pembelian->update_data($kode_barang, $data)) { // Update data stok barang
            session()->setFlashdata('success', 'Data Pembelian Barang Berhasil Diperbarui');
        } else {
            session()->setFlashdata('error', 'Gagal Memperbarui Data Pembelian Barang');
        }

        return redirect()->to(base_url('Pembelian')); // Redirect kembali ke halaman Pembelian
    }

    public function delete($kode_barang)
    {
        $model = new Model_pembelian();

        // Menghapus data berdasarkan ID
        $model->delete($kode_barang);

        // Set flash message dan redirect
        session()->setFlashdata('success', 'Data barang berhasil dihapus');
        return redirect()->to(base_url('Pembelian'));
    }
}
?>