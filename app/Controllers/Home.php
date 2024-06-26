<?php

namespace App\Controllers;

use App\Models\Empleados;
use App\Models\Libros;
use App\Models\Usuarios;

class Home extends BaseController
{

    public function indexTest()
    {
        // Cargar el servicio de la base de datos
        $db = \Config\Database::connect();

        // Realizar una consulta de prueba
        $query = $db->query('SELECT * FROM libros');
        $result = $query->getResult();

        // Verificar la conexión y los resultados
        if ($result) {
            echo "Conexión exitosa";
            print_r($result);
        } else {
            echo "Conexión fallida";
        }
    }

    public function index()
    {
        return view('header') . view('navs/navPrincipal') . view('contenidoInicio') . view('footer');
    }

    public function inicioSesion()
    {
        return view('header') . view('navs/navPrincipal') . view('contenidoInicioSesion') . view('footer');
    }

    public function inicioNoDisp()
    {
        return view('header') . view('navs/navPrincipal') . view('contenidoNuevo') . view('footer');
    }



    public function iniciarSesion()
    {

        $usuario = new Usuarios();

        $email = $this->request->getPost('correo');

        $password = $this->request->getPost('contraseña');
        var_dump($email);
        var_dump($password);
        if ($usuario->where('Correo', $email)->first() && $usuario->where('Constraseña', $password)->first()) {
            return view('header') . view('navs/navPrincipal') . view('usuario/contenidoUsuario') . view('footer');
        } else {
            return view('header') . view('navs/navPrincipal') . view('contenidoInicioSesion') . view('footer');
        }
    }

    public function inicioSesionEmpleado()
    {
        return view('header') . view('navs/navPrincipal') . view('contenidoInicioSesionEmpleado') . view('footer');
    }

    public function iniciarSesionEmpleado()
    {

        $usuario = new Empleados();

        $email = $this->request->getPost('correo');
        $password = $this->request->getPost('contrasena');
        $puestoA = 2;

        $puestoE = 1;

        var_dump($email);
        var_dump($password);

        if ($usuario->where('Correo', $email)->first() && $usuario->where('Contraseña', $password)->first() && $usuario->where('idPuesto', $puestoA)) {
            return view('header') . view('navs/navPrincipal') . view('usuario/contenidoAdministrador') . view('footer');
        } else {
            if ($usuario->where('Correo', $email)->first() && $usuario->where('Contraseña', $password)->first() && $usuario->where('idPuesto', $puestoE)) {
                return view('header') . view('navs/navPrincipal') . view('usuario/contenidoEmpleado') . view('footer');
            } else {
                return view('header') . view('navs/navPrincipal') . view('contenidoInicioSesionEmpleado') . view('footer');
            }
        }
    }

    public function administrador()
    {
        return view('header') . view('navs/navPrincipal') . view('usuario/contenidoAdministrador') . view('footer');
    }

    public function empleado()
    {
        return view('header') . view('navs/navPrincipal') . view('usuario/contenidoEmpleado') . view('footer');
    }

    public function usuario()
    {
        return view('header') . view('navs/navPrincipal') . view('usuario/contenidoUsuario') . view('footer');
    }

    public function consultaLibros()
    {
        $userModel = new Libros();
        $datos['datitos'] = $userModel->findAll();
        return view('header') . view('navs/navLibros') . view('libros/contenidoConsultaLibros', $datos) . view('footer');
    }

    public function registroLibros()
    {
        return view('header') . view('navs/navLibros') . view('libros/contenidoRegistroLibros') . view('footer');
    }

    public function modificarLibros()
    {
        return view('header') . view('navs/navLibros') . view('libros/contenidoModificarLibros') . view('footer');
    }

    public function eliminarLibros()
    {
        return view('header') . view('navs/navLibros') . view('libros/contenidoEliminarLibros') . view('footer');
    }

    public function consultaUsuarios()
    {
        $userModel = new Usuarios();
        $datos['datitos'] = $userModel->findAll();
        return view('header') . view('navs/navUsuarios') . view('usuarios/contenidoConsultaUsuarios', $datos) . view('footer');
    }

    public function registroUsuarios()
    {
        return view('header') . view('navs/navUsuarios') . view('usuarios/contenidoRegistroUsuarios') . view('footer');
    }

    public function modificarUsuarios()
    {
        return view('header') . view('navs/navUsuarios') . view('usuarios/contenidoModificarUsuarios') . view('footer');
    }

    public function eliminarUsuarios()
    {
        return view('header') . view('navs/navUsuarios') . view('usuarios/contenidoEliminarUsuarios') . view('footer');
    }

    /*public function consultaEmpleados(){
        return view('header').view('navs/navEmpleados').view('empleados/contenidoConsultaEmpleados').view('footer');
    }*/

    public function registroEmpleados()
    {
        return view('header') . view('navs/navEmpleados') . view('empleados/contenidoRegistroEmpleados') . view('footer');
    }

    public function modificarEmpleados()
    {
        return view('header') . view('navs/navEmpleados') . view('empleados/contenidoModificarEmpleados') . view('footer');
    }

    public function eliminarEmpleados()
    {
        return view('header') . view('navs/navEmpleados') . view('empleados/contenidoEliminarEmpleados') . view('footer');
    }

    public function consultaEmpleados()
    {
        $userModel = new Empleados();

        // Obtiene todos los registros de empleados
        $datos['datitos'] = $userModel->findAll();

        //var_dump($datos);

        // Cargar las vistas
        return view('header')
            . view('navs/navEmpleados')
            . view('empleados/contenidoConsultaEmpleados', $datos)
            . view('footer');
    }

    public function deleteE()
    {
        $userModel = new Empleados();

        $id = $this->request->getPost('idempleado');

        $userModel->delete($id);

        return redirect()->back();
    }

    public function deleteL()
    {
        $userModel = new Libros();

        $id = $this->request->getPost('idlibro');
        $userModel->delete($id);
        return redirect()->back();
    }

    public function deleteU()
    {
        $userModel = new Usuarios();

        $id = $this->request->getPost('idusuario');
        $userModel->delete($id);
        return redirect()->back();
    }
    /*public function insertarLibros()
    {
        $userModel = new Libros();
        string e;
        if(getPost('estatus')=='En Reparacion')
        {
            e= 1;
        }

        if(getPost('genero')=='Aventura')
        {
            getPost('genero')= '1';
        }
        $datos =[
            'Nombre'=>$this->request->getPost('Nombre'),
            'Apellido'=>$this->request->getPost('Apellido'),
            'Email'=>$this->request->getPost('Email'),
            'idEmpleado'=>$this->request->getPost('ide'),
            'idUsuario'=>$this->request->getPost('idp'),
            'idEstatusL'=>$this->request->1,
            'idGenero'=>$this->request->getPost('genero')
        ];
        $userModel->insert($datos);
        return redirect()->back();
    }*/

    public function insertarU()
    {
        $userModel = new Usuarios();
        $datos = [
            'Nombre' => $this->request->getPost('name'),
            'ApellidoP' => $this->request->getPost('lastname1'),
            'ApellidoM' => $this->request->getPost('lastname2'),
            'Edad' => $this->request->getPost('age'),
            'CURP' => $this->request->getPost('curp'),
            'Correo' => $this->request->getPost('email'),
            'Constraseña' => $this->request->getPost('contraseña'),
            'ConfContraseña' => $this->request->getPost('confirmacion')
        ];
        //var_dump($datos);
        $userModel->insert($datos);
        return redirect()->back();
    }

    public function updateU()
    {
        $userModel = new Usuarios();

        $id = $this->request->getPost('idusuario');

        $datos = [
            'Nombre' => $this->request->getPost('name'),
            'ApellidoP' => $this->request->getPost('lastname1'),
            'ApellidoM' => $this->request->getPost('lastname2'),
            'Edad' => $this->request->getPost('age'),
            'CURP' => $this->request->getPost('curp'),
            'Correo' => $this->request->getPost('email'),
            'Constraseña' => $this->request->getPost('contraseña'),
            'ConfContraseña' => $this->request->getPost('confirmacion')
        ];

        foreach ($datos as $clave => $valor) {
            if ($valor == NULL) {
                unset($datos[$clave]);
            }
        }
        $userModel->update($id, $datos);
        return redirect()->back();
    }
}
