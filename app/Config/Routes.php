<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('listar', 'CatalogoController::listar');

$routes->get('catalogo/listar', 'CatalogoController::listar');
$routes->get('catalogo/crear', 'CatalogoController::crear');
$routes->post('catalogo/guardar', 'CatalogoController::guardar');

$routes->get('catalogo/editar/(:num)', 'CatalogoController::editar/$1');
$routes->post('catalogo/actualizar/(:num)', 'CatalogoController::actualizar/$1');
$routes->get('catalogo/eliminar/(:num)', 'CatalogoController::eliminar/$1');

