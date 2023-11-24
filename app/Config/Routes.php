<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/view', 'User::index');

$routes->group('authentication', function($routes){
    $routes->get('/', 'Auth::index');
    $routes->add('login', 'Auth::login');
    $routes->get('logout', 'Auth::logout');
});

$routes->get('menu', 'Menu::index');
$routes->add('tambah_menu', 'Menu::tambah');
$routes->add('ubah/(:num)', 'Menu::ubah/$1');
$routes->get('hapus/(:num)', 'Menu::hapus/$1');

$routes->get('detail', 'Detail::index');
$routes->add('tambah_detail', 'Detail::tambah');
$routes->add('ubah/(:num)', 'Detail::ubah/$1');
$routes->get('hapus/(:num)', 'Detail::hapus/$1');

$routes->get('pelanggan', 'Pelanggan::index');
$routes->add('tambah_pelanggan', 'Pelanggan::tambah');
$routes->add('ubahh/(:num)', 'Pelanggan::ubahh/$1');
$routes->get('hapus/(:num)', 'Pelanggan::hapus/$1');

$routes->get('pemesanan', 'Pemesanan::index');
$routes->add('tambah_pemesanan', 'Pemesanan::tambah');
$routes->add('ubahh/(:num)', 'Pemesanan::ubahh/$1');
$routes->get('hapus/(:num)', 'Pemesanan::hapus/$1');

$routes->get('metode_pembayaran', 'Metode_pembayaran::index');
$routes->add('tambah_metode_pembayaran', 'Metode_pembayaran::tambah');
$routes->add('edit/(:num)', 'Metode_pembayaran::edit/$1');
$routes->get('delete/(:num)', 'Metode_pembayaran::delete/$1');