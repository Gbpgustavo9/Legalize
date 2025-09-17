<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Usuario extends BaseController
{
    public function cadastrar()
    {
        return view('usuario/cadastrar_usuario');
    }
}
