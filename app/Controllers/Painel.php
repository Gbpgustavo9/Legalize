<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Painel extends BaseController
{
    public function index()
    {
        // Aqui você pode adicionar lógica para verificar se o usuário está logado
        // e exibir o painel. Por enquanto, só retorna uma view simples.
        return view('usuario/painel');
    }
}
