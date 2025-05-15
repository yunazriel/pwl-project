<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('/keranjang', 'TransaksiController::index', ['filter' => 'auth']);
$routes->get('/pesanan', 'PesananController::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login', ['filter' => 'redirect']);
$routes->get('logout', 'AuthController::logout');