
<?php

use App\Controllers\Dosen;
use App\Controllers\Anggota;

$routes->group('dosen', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Dosen::index');
    $routes->get('create', 'Dosen::create');
    $routes->post('store', 'Dosen::store');
    $routes->get('edit/(:num)', 'Dosen::edit/$1'); // Menambahkan parameter (:num) untuk ID dosen
    $routes->post('update/(:num)', 'Dosen::update/$1'); // Menambahkan parameter (:num) untuk ID dosen
    $routes->get('delete/(:num)', 'Dosen::delete/$1');
});

$routes->group('petugas', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Petugas::index');
    $routes->get('create', 'Petugas::create');
    $routes->post('store', 'Petugas::store');
    $routes->get('edit/(:num)', 'Petugas::edit/$1');
    $routes->post('update/(:num)', 'Petugas::update/$1');
    $routes->get('delete/(:num)', 'Petugas::delete/$1');
});
