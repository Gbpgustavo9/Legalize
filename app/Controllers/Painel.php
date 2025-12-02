<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Painel extends BaseController
{
    public function index()
    {
        return view('painel/painel');
    }
}
