<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/add_data_mahasiswa', 'Mahasiswa::add_data_mahasiswa');
$routes->post('/proses_add_mahasiswa', 'Mahasiswa::proses_add_mahasiswa');
$routes->get('/edit_data_mahasiswa/(:any)', 'Mahasiswa::edit_data_mahasiswa/$1');
$routes->post('/proses_edit_mahasiswa', 'Mahasiswa::proses_edit_mahasiswa');
$routes->get('/delete_data_mahasiswa/(:any)', 'Mahasiswa::delete_data_mahasiswa/$1');