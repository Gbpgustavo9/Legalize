<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Analise extends BaseController
{
    public function index()
    {
        // Página visual de análise de cláusulas (apenas layout por enquanto)
        return view('painel/analise');
    }
}
