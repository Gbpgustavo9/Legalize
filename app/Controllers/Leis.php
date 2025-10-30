<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Leis extends BaseController
{
    public function index()
    {
        // Página visual de consulta legislativa (layout apenas)
        return view('painel/leis');
    }
}
