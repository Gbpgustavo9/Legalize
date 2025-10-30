<?php

namespace App\Models;

use CodeIgniter\Model;

class LeiModel extends Model
{
    protected $table = 'leis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'descricao', 'data_publicacao'];
}
