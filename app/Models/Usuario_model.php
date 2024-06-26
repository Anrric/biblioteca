<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_model extends Model
{
    public function login($username, $password)
    {
        $this->where('Correo', $username);
        $this->where('Contraseña', $password);
        $q = $this->db->get('usuario');
        if ($q->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
