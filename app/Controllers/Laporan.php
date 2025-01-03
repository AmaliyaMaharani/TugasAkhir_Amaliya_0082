<?php

namespace App\Controllers;

use App\Models\Model_Laporan;

class Laporan extends BaseController
{
    public function index()
    {
        // Memuat model Laporan
        $model = new Model_laporan();

        // Mengambil data laporan dari model
        $data['laporan'] = $model->getAllLaporan();

        // Menyusun data untuk dikirim ke view
        $data['title'] = 'Laporan Stok Barang';
        $data['content'] = 'laporan/v_laporan';  // Menentukan view yang digunakan

        // Menampilkan view dengan data
        echo view('layout/v_wrapper', $data);
    }
}
