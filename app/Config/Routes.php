<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//dashboard
//$routes->get('/','Home::index');

//login
// Login
$routes->get('/', 'Login::index');
$routes->get('/', 'Login::login');
$routes->post('/proses-login', 'Login::prosesLogin');
$routes->get('/dashboard', 'Dashboard::dashboard');
$routes->get('/logout', 'Login::logout');

// untuk produk
$routes->get('/list-produk','Produk::TampilProduk');
$routes->get('/tambah_produk','Produk::tambah');
$routes->post('/simpan-produk','Produk::simpanProduk');
$routes->get('/hapus-produk/(:num)','Produk::hapus/$1');
$routes->get('/edit-produk/(:num)','Produk::edit/$1');
$routes->post('/update-produk','Produk::update');

// untuk kategori
$routes->get('/list-kategori','Kategori::TampilKategori');
$routes->get('/tambah_kategori','Kategori::tambah');
$routes->post('/simpan-kategori','Kategori::simpanKategori');
$routes->get('/hapus-kategori/(:num)','Kategori::hapus/$1');
$routes->get('/edit-kategori/(:num)','Kategori::edit/$1');
$routes->post('/update-kategori','Kategori::update');

// untuk satuan
$routes->get('/list-satuan','Satuan::TampilSatuan');
$routes->get('/tambah_satuan','Satuan::tambah');
$routes->post('/simpan-satuan','Satuan::simpanSatuan');
$routes->get('/hapus-satuan/(:num)','Satuan::hapus/$1');
$routes->get('/edit-satuan/(:num)','Satuan::edit/$1');
$routes->post('/update-satuan','Satuan::update');

// untuk user
$routes->get('/list-user','User::TampilUser');
$routes->get('/tambah_user','User::tambah');
$routes->post('/simpan-user','User::simpanUser');
$routes->get('/hapus-user/(:num)','User::hapus/$1');
$routes->get('/edit-user/(:num)','User::edit/$1');
$routes->post('/update-user','User::update');

//Laporan
$routes->get('/list-laporan', 'Laporan::index');
$routes->get('/prin-stok', 'Laporan::index');
$routes->get('/pdf/generate', 'Laporan::generate');

//Penjualan
$routes->get('/form-penjualan','Penjualan::lihatPenjualan',['filter'=>'autentifikasi']);
$routes->post('/form-penjualan','Penjualan::savePenjualan',['filter'=>'autentifikasi']);
$routes->get('/form-bayar','Penjualan::simpanPembayaran',['filter'=>'autentifikasi']);
$routes->post('/form-penjualan/savePembayaran','Penjualan::savePembayaran',['filter'=>'autentifikasi']);
$routes->get('/hapus-barang/(:num)', 'Penjualan::hapus/$1',['filter'=>'autentifikasi']);