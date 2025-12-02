<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Analise extends BaseController
{
    public function index()
    {
        return view('painel/analise');
    }
}
