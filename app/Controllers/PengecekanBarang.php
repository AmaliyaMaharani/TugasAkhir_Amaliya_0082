<?php

namespace App\Controllers;

use App\Models\Model_pengecekanbarang;

class PengecekanBarang extends BaseController
{
    protected $Model_pengecekanbarang;

    public function __construct()
    {
        $this->Model_pengecekanbarang = new Model_pengecekanbarang();
    }

    // Halaman Utama - Menampilkan daftar pengecekan barang
    public function index()
    {
        // Mengambil parameter dari query string
        $keyword = $this->request->getGet('search'); // Kata kunci pencarian
        $perPage = $this->request->getGet('per_page') ?? 10; // Jumlah data per halaman (default 10)

        // Query model
        $model = $this->Model_pengecekanbarang;
        $query = $model;

        // Filter pencarian
        if (!empty($keyword)) {
            $query = $query->like('no_barang', $keyword)
                ->orLike('kode_barang', $keyword)
                ->orLike('nama_barang', $keyword);
        }

        // Pagination
        $currentPage = $this->request->getGet('page') ?? 1;
        $total = $query->countAllResults(false); // Total data tanpa menghapus query builder
        $barang = $query->paginate($perPage, 'default'); // Data untuk halaman saat ini
        $pager = $query->pager; // Objek pagination

        // Menghitung data yang ditampilkan
        $start = (($currentPage - 1) * $perPage) + 1;
        $end = min($currentPage * $perPage, $total);

        // Data untuk dikirim ke view
        $data = [
            'title' => 'Pengecekan Barang', // Judul halaman
            'barang' => $barang,
            'keyword' => $keyword,
            'perPage' => $perPage,
            'currentPage' => $currentPage,
            'total' => $total,
            'start' => $start,
            'end' => $end,
            'pager' => $pager,
            'content' => 'pengecekan/v_pengecekanbarang', // View untuk halaman pengecekan barang
        ];

        // Render layout dengan mengirimkan data
        echo view('layout/v_wrapper', $data);
    }
}
