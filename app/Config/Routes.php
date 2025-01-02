<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/usuario', 'UsuarioController::index');
$routes->get('/usuario/edit', 'UsuarioController::edit');
$routes->get('/usuario/create', 'UsuarioController::create');
$routes->post('/usuario/store', 'UsuarioController::store');
$routes->get('/usuario/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('/usuario/update/(:num)', 'UsuarioController::update/$1');
$routes->get('/usuario/delete/(:num)', 'UsuarioController::delete/$1');
