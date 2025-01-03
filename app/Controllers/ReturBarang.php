<?php
namespace App\Controllers;

use App\Models\Model_returbarang;

class ReturBarang extends BaseController
{
    protected $Model_returbarang;

    public function __construct()
    {
        $this->Model_returbarang = new Model_returbarang();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengelolaan Retur Barang',
            'returbarang' => $this->Model_returbarang->findAll(), // Mengambil semua data returbarang
            'content' => 'retur/v_returbarang', // Pastikan ini adalah view untuk list returbarang
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function add_data()
    {
        $data = [
            'title' => 'Tambah Data Retur Barang',
            'content' => 'retur/v_addreturbarang', // Pastikan ini adalah view untuk form tambah returbarang
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        // Mendapatkan data dari form
        $data = [
            'id_retur' => $this->request->getPost('id_retur'),
            'no_barang' => $this->request->getPost('no_barang'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tanggal' => $this->request->getPost('tanggal'),
            'qty' => $this->request->getPost('qty'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'nama_toko' => $this->request->getPost('nama_toko'),
            'alamat' => $this->request->getPost('alamat'),
            'ttd' => $this->request->getPost('ttd'), // Kolom tanda tangan (ttd)
        ];

        // Menggunakan model untuk menyimpan data ke tabel returbarang
        $this->Model_returbarang->save($data);

        // Mengatur flashdata untuk memberi notifikasi sukses
        session()->setFlashdata('success', 'Data Retur Barang Berhasil Ditambahkan');

        // Mengarahkan kembali ke halaman utama
        return redirect()->to(base_url('ReturBarang'));
    }

    public function edit($id_retur)
    {
        // Mengambil data returbarang berdasarkan id_retur
        $returbarang = $this->Model_returbarang->find($id_retur);

        // Cek apakah data returbarang ditemukan
        if ($returbarang) {
            $data = [
                'title' => 'Edit Data Retur Barang',
                'content' => 'retur/v_editreturbarang', // Pastikan ini adalah view untuk edit returbarang
                'returbarang' => $returbarang, // Mengirimkan data returbarang ke view
            ];
            echo view('layout/v_wrapper', $data);
        } else {
            // Jika returbarang tidak ditemukan, arahkan kembali dengan pesan error
            session()->setFlashdata('error', 'Retur Barang tidak ditemukan');
            return redirect()->to(base_url('ReturBarang'));
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
            'ttd' => $this->request->getPost('ttd'), // Kolom tanda tangan (ttd)
        ];

        // Menggunakan model untuk memperbarui data berdasarkan id_retur
        $id_retur = $this->request->getPost('id_retur');
        $this->Model_returbarang->update($id_retur, $data);

        // Mengatur flashdata untuk memberi notifikasi sukses
        session()->setFlashdata('success', 'Data Retur Barang Berhasil Diperbarui');

        // Mengarahkan kembali ke halaman utama
        return redirect()->to(base_url('ReturBarang'));
    }

    public function delete($id_retur)
    {
        // Menghapus data returbarang berdasarkan id_retur
        $this->Model_returbarang->delete($id_retur);

        // Mengatur flashdata untuk memberi notifikasi sukses
        session()->setFlashdata('success', 'Data Retur Barang Berhasil Dihapus');

        // Mengarahkan kembali ke halaman utama
        return redirect()->to(base_url('ReturBarang'));
    }

    
}
?>