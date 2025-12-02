<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Leis extends BaseController
{
    public function index()
    {
        return view('painel/leis');
    }
}
