<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/demo', 'Home::index');
$routes->get('/form', 'FormConTroller::index');
$routes->get('/', 'ShopController::index');
$routes->post('/order/preview', 'ShopController::preview');
