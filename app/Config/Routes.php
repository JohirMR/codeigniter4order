<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/demo', 'Home::index');
$routes->get('/form', 'FormConTroller::index');
$routes->get('/', 'ShopController::index');
// $routes->post('/order/preview', 'ShopController::preview');
$routes->post('order/submit',  'ShopController::submit');

$routes->group('admin', function($routes){
    $routes->get('books', 'Admin\Books::index');
    $routes->match(['get','post'],'books/create','Admin\Books::create');
    $routes->match(['get','post'],'books/edit/(:num)','Admin\Books::edit/$1');
    $routes->get('orders', 'Admin\Orders::index');
});