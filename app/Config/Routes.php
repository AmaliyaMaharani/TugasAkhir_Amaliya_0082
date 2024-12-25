<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rute ke halaman utama
$routes->get('/', 'Home::index'); // default routes

$routes->get('Home', 'Home::index');

// Rute ke halaman pengelolaan barang
$routes->get('/PengelolaanBarang', 'PengelolaanBarang::index'); // Rute untuk halaman pengelolaan barang

$routes->get('PengelolaanBarang/add_data', 'PengelolaanBarang::add_data');
$routes->post('PengelolaanBarang/save', 'PengelolaanBarang::save');
$routes->get('PengelolaanBarang/edit/(:any)', 'PengelolaanBarang::edit/$1');
$routes->post('PengelolaanBarang/update/(:any)', 'PengelolaanBarang::update/$1');

$routes->get('Pembelian', 'Pembelian::index'); // Menampilkan daftar pembelian
$routes->get('Pembelian/edit/(:any)', 'Pembelian::edit/$1'); // Menampilkan halaman edit berdasarkan kode_barang
$routes->post('Pembelian/update', 'Pembelian::update'); // Mengupdate data pembelian tanpa parameter di URL


// Tambahkan rute lainnya sesuai kebutuhan

?>