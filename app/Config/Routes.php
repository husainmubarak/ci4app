<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');

$routes->group('pages', function ($routes) {
    $routes->get('/', 'Pages::index');
    $routes->get('(:any)', 'Pages::$1');
});

$routes->group('komik', function ($routes) {
    $routes->get('/', 'Komik::index');
    $routes->get('create', 'Komik::create');
    $routes->post('save', 'Komik::save');
    $routes->get('(:segment)', 'Komik::detail/$1');
});