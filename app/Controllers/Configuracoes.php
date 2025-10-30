<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Configuracoes extends BaseController
{
    public function index()
    {
        // Página visual de configurações
        return view('painel/configuracoes');
    }
}
