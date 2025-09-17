<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadastrar-usuario', 'Usuario::cadastrar');

$routes->get('cadastrar_usuario', function() {
	echo view('usuario/cadastrar_usuario');
});
