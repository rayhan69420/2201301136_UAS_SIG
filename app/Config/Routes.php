<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/index', 'Landing::index');

$routes->get('/data', 'KantorBupati::index');
$routes->get('kantorbupati/detail/(:num)', 'KantorBupati::detail/$1');


$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');


$routes->get('/dashboard', 'Dashboard::index');

$routes->get('dashboard/data', 'DataKantor::index');

$routes->get('dashboard/tambah', 'TambahData::index');
$routes->post('tambahdata/save', 'TambahData::save');

$routes->get('dashboard/edit/(:num)', 'DataKantor::edit/$1');
$routes->post('datakantor/update/(:num)', 'DataKantor::update/$1');

$routes->post('dashboard/delete/(:num)', 'DataKantor::delete/$1');
