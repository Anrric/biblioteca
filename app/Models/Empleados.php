<?php

namespace App\Models;

use CodeIgniter\Model;

class Empleados extends Model
{
    protected $table      = 'empleados';
    protected $primaryKey = 'id_empleado';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellidoP', 'apellidoM', 'edad', 'CURP', 'correo', 'contraseña', 'confContraseña', 'fechaIng', 'id_puesto', 'id_area', 'id_estatusE'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
