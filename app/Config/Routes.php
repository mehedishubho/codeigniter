<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminHome::index');
$routes->get('/products', 'ProductController::index');
$routes->get('/create', 'ProductController::create');
$routes->post('/store', 'ProductController::store');
// $routes->get('products/delete/(:num)', 'ProductController::delete/$1');
