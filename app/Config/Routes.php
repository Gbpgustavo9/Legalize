

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/cadastrar-usuario', 'Usuario::cadastrar');
$routes->post('cadastrar_usuario.php', 'Usuario::salvar');

$routes->get('cadastrar_usuario', function() {
	echo view('usuario/cadastrar_usuario');
});

$routes->get('redefinir_senha.php', function() {
	echo view('usuario/redefinir_senha');
});
$routes->get('painel', 'Painel::index');
$routes->get('contratos', 'Contratos::index');
$routes->post('contratos/generate', 'Contratos::generate');
$routes->get('analise', 'Analise::index');
$routes->get('leis', 'Leis::index');
$routes->get('assistente', 'Assistente::index');
$routes->get('configuracoes', 'Configuracoes::index');
$routes->post('redefinir_senha.php', 'Usuario::redefinirSenha');
$routes->post('login.php', 'Usuario::login');
$routes->get('login.php', function() {
	echo view('usuario/index');
});



