<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'cpf', 'cargo', 'usuario', 'senha'];
    protected $useTimestamps = false;
}
