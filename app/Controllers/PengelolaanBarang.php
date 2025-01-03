<?php
namespace App\Controllers;

use App\Models\Model_pengelolaanbarang;

class PengelolaanBarang extends BaseController
{
    protected $Model_pengelolaanbarang;

    public function __construct()
    {
        $this->Model_pengelolaanbarang = new Model_pengelolaanbarang();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengelolaan Barang Masuk',
            'pengelolaanbarang' => $this->Model_pengelolaanbarang->findAll(), // Mengambil semua data
            'content' => 'admin/v_pengelolaanbarang',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function edit($no_barang)
    {
        // Mengambil data barang berdasarkan no_barang
        $barang = $this->Model_pengelolaanbarang->find($no_barang);

        // Cek apakah data barang ditemukan
        if ($barang) {
            $data = [
                'title' => 'Edit Data Barang',
                'content' => 'admin/v_editpengelolaan', // Pastikan ini adalah view untuk edit
                'barang' => $barang, // Mengirimkan data barang ke view
            ];
            echo view('layout/v_wrapper', $data);
        } else {
            // Jika barang tidak ditemukan, arahkan kembali dengan pesan error
            session()->setFlashdata('error', 'Barang tidak ditemukan');
            return redirect()->to(base_url('PengelolaanBarang'));
        }
    }

    public function update()
    {
        // Mendapatkan data dari form
        $data = [
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tanggal' => $this->request->getPost('tanggal'),
            'qty' => $this->request->getPost('qty'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'ttd' => $this->request->getPost('ttd'), // Pastikan kolom ttd ada di sini
        ];

        // Menggunakan model untuk memperbarui data berdasarkan no_barang
        $no_barang = $this->request->getPost('no_barang'); // Pastikan no_barang dikirimkan saat update
        $this->Model_pengelolaanbarang->update($no_barang, $data); // Gunakan update untuk pembaruan data

        // Mengatur flashdata untuk memberi notifikasi sukses
        session()->setFlashdata('success', 'Data Berhasil Diperbarui');

        // Mengarahkan kembali ke halaman utama
        return redirect()->to(base_url('PengelolaanBarang'));
    }
}
?>