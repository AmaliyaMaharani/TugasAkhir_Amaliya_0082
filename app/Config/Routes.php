<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rute ke halaman utama
$routes->get('Home', 'Home::index');
$routes->get('/', 'Home::login'); // default routes
$routes->post('/autentikasi', 'Home::autentikasi');
$routes->get('logout', 'Home::logout');

// Rute ke halaman pengelolaan barang
$routes->get('/PengelolaanBarang', 'PengelolaanBarang::index'); // Rute untuk halaman pengelolaan barang
$routes->get('PengelolaanBarang/edit/(:any)', 'PengelolaanBarang::edit/$1');
$routes->post('PengelolaanBarang/update/(:any)', 'PengelolaanBarang::update/$1');

// Rute Pembelian
$routes->get('Pembelian', 'Pembelian::index'); // Menampilkan daftar pembelian
$routes->get('Pembelian/edit/(:any)', 'Pembelian::edit/$1'); // Menampilkan halaman edit berdasarkan kode_barang
$routes->post('Pembelian/update', 'Pembelian::update'); // Mengupdate data pembelian tanpa parameter di URL
$routes->get('Pembelian/delete/(:any)', 'Pembelian::delete/$1');

// Rute Retur Barang
$routes->get('/ReturBarang', 'ReturBarang::index'); // Rute untuk halaman pengelolaan retur barang
$routes->get('ReturBarang/add_data', 'ReturBarang::add_data'); // Rute untuk halaman tambah data retur barang
$routes->post('ReturBarang/save', 'ReturBarang::save'); // Rute untuk menyimpan data retur barang
$routes->get('ReturBarang/edit/(:any)', 'ReturBarang::edit/$1'); // Rute untuk halaman edit data retur barang
$routes->post('ReturBarang/update/(:any)', 'ReturBarang::update/$1'); // Rute untuk update data retur barang berdasarkan id_retur
$routes->get('ReturBarang/delete/(:any)', 'ReturBarang::delete/$1');

//Rute Stok Barang
$routes->get('StokBarang', 'StokBarang::index'); // Menampilkan daftar stok barang
$routes->get('StokBarang/edit/(:any)', 'StokBarang::edit/$1');// Menampilkan halaman edit berdasarkan id_stok
$routes->post('StokBarang/update/(:any)', 'StokBarang::update/$1');

//Rute Laporan
$routes->get('Laporan', 'Laporan::index');

//Rute Pengecekan Barang
$routes->get('PengecekanBarang', 'PengecekanBarang::index');

$routes->group('Admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('dashboard', 'Home::index');
});

$routes->group('Pemilik', ['filter' => 'role:pemilik'], function ($routes) {
    $routes->get('dashboard', 'Home::index');
});
?>