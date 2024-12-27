<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

service('auth')->routes($routes);
$routes->post('/submit', 'Home::submit');

// admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::index');

$routes->get('/admin/koleksi-produk', 'AdminController::koleksiproduk');
$routes->get('/admin/koleksi-produk/tambah', 'AdminController::koleksiprodukTambah');
$routes->post('/admin/koleksi-produk/tambah', 'AdminController::createProduk');
$routes->get('/admin/koleksi-produk/edit', 'AdminController::koleksiprodukEdit');
$routes->get('/admin/koleksi-produk/hapus', 'AdminController::koleksiprodukHapus');

$routes->get('/admin/transaksi', 'AdminController::transaksi');
$routes->get('/admin/transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
$routes->get('/admin/transaksi/hapus', 'AdminController::transaksiHapus');

$routes->get('/admin/pelanggan', 'AdminController::pelanggan');
$routes->get('/admin/pelanggan/hapus', 'AdminController::pelangganHapus');

$routes->get('file-images/(:segment)/(:segment)', 'AdminController::images/$1/$2');