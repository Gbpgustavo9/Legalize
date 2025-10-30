<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Assistente extends BaseController
{
    public function index()
    {
        // Página visual do Assistente Jurídico (apenas layout por enquanto)
        return view('painel/assistente');
    }
}
