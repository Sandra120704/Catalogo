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
