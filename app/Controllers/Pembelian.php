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

    public function index()
    {
        $data = [
            'title' => 'Pembelian Barang',
            'pembelian' => $this->Model_pembelian->findAll(), // Mengambil semua data
            'content' => 'pembelian/v_pembelianbarang',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function edit($kode_barang)
    {
        // Mengambil data pembelian berdasarkan kode_barang
        $pembelian = $this->Model_pembelian->find($kode_barang);

        // Cek apakah data pembelian ditemukan
        if ($pembelian) {
            $data = [
                'title' => 'Edit Data Pembelian',
                'content' => 'pembelian/v_editpembelian', // Pastikan ini adalah view untuk edit
                'pembelian' => $pembelian, // Mengirimkan data pembelian ke view
            ];
            echo view('layout/v_wrapper', $data);
        } else {
            // Jika pembelian tidak ditemukan, arahkan kembali dengan pesan error
            session()->setFlashdata('error', 'Data pembelian tidak ditemukan');
            return redirect()->to(base_url('Pembelian'));
        }
    }

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
        // Menggunakan model untuk memperbarui data berdasarkan kode_barang
        $kode_barang = $this->request->getPost('kode_barang'); // Pastikan kode_barang dikirimkan saat update
        $this->Model_pembelian->update($kode_barang, $data); // Gunakan update untuk pembaruan data

        // Mengatur flashdata untuk memberi notifikasi sukses
        session()->setFlashdata('success', 'Data Pembelian Berhasil Diperbarui');

        // Mengarahkan kembali ke halaman utama
        return redirect()->to(base_url('Pembelian'));
    }

}


?>