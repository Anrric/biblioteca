<?php

namespace App\Models;

use CodeIgniter\Model;

class Libros extends Model
{
    protected $table      = 'libros';
    protected $primaryKey = 'id_libro';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'año', 'autor', 'id_genero', 'id_usuario', 'id_empleado', 'id_estatusL'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}