<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/berita', 'Home::berita');
$routes->get('/dosen', 'Dosen::display');
$routes->get('/hello', 'Hello::index');
$routes->get('/table', 'Hello::table');
$routes->get('/tableloop', 'Hello::tableLoop');
// $routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/detail/(:any)', 'Mahasiswa::detail/$1');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/validasi', 'Validasi::index');
$routes->post('/validasi/simpan', 'Validasi::simpan');


// $routes->get('/mahasiswa/create', 'MahasiswaController::create');
// $routes->post('/mahasiswa/store', 'MahasiswaController::store');
// $routes->get('/mahasiswa/show/(:num)', 'MahasiswaController::show/$1');
// $routes->get('/mahasiswa/edit/(:num)', 'MahasiswaController::edit/$1');
// $routes->post('/mahasiswa/update/(:num)', 'MahasiswaController::update/$1');
// $routes->get('/mahasiswa/delete/(:num)', 'MahasiswaController::delete/$1');
// $routes->get('/mahasiswa/search', 'MahasiswaController::search');
