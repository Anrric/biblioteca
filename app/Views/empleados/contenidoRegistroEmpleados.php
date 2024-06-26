<br><br>
<script>
    function validarEmpleadoRegistro() {
        var nombre, apellidop, apellidom, edad, curp, contraseña, confirmacion;
        var emailRegex = /\w+@\w+\.+[a-z]/;


        nombre = document.getElementById('name').value;
        apellidop = document.getElementById('lastname1').value;
        apellidom = document.getElementById('lastname2').value;
        edad = document.getElementById('age').value;
        curp = document.getElementById('curp').value;
        email = document.getElementById('email').value;
        contraseña = document.getElementById('contraseña').value;
        confirmacion = document.getElementById('confirmacion').value;

        if (nombre == "" || apellidop == "" || apellidom == "" || edad == "" || curp == "" || email == "" || contraseña == "" || confirmacion == "") {
            alert("No puede haber campos vacios");
            return false;
        } else if (!isNaN(nombre) || !isNaN(apellidop) || !isNaN(apellidom)) {
            alert("No puedes utilizar numeros en Nombre y Apellidos");
            return false;
        } else if (nombre.length > 15) {
            alert("El nombre es muy grande");
            return false;
        } else if (apellidop.length > 15) {
            alert("El apellido paterno es muy grande");
            return false;
        } else if (apellidom.length > 15) {
            alert("El apellido materno es muy grande");
            return false;
        } else if (contraseña.length > 15) {
            alert("La contraseña es muy grande");
            return false;
        } else if (curp.length > 19) {
            alert("La CURP es muy grande");
            return false;
        } else if (direccion.length > 10) {
            alert("La id es muy grande");
            return false;
        } else if (contraseña != confirmacion) {
            alert("Las contraseñas no coinciden");
            return false;
        } else if (contraseña.legth > 15 && confirmacion.leght > 15) {
            alert("Las contraseñas son muy grandes");
            return false;
        } else if (email.length > 20) {
            alert("El correo es muy grande");
            return false;
        } else if (!emailRegex.test(email)) {
            alert("La dirección de email es incorrecta.");
            return false;
        } else if (isNaN(edad)) {
            alert("Edad invalidad");
            return false;
        }
    }
</script>
<center>
    <main class="container row col-lg-6">
        <br><br>
        <article>
            <br><br><br>
            <center>
                <h1 style="font-weight: bold;">Registro de Empleados</h1>
            </center>
            <br><br>
            <form action="" onsubmit=" return validarEmpleadoRegistro()">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-4">
                        <input type="name" class="form-control" id="name" maxlength="10" required>
                    </div>
                    <label for="lastname1" class="col-sm-3 col-form-label">Apellido Paterno:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="lastname1" maxlength="10" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="lastname2" class="col-sm-3 col-form-label">Apellido Materno:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="lastname2" maxlength="10" required>
                    </div>
                    <label for="age" class="col-sm-2 col-form-label">Edad:</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="age" min="1" max="100" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="curp" class="col-sm-2 col-form-label">CURP:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="curp" maxlength="18" required>
                    </div>
                    <label for="emal" class="col-sm-2 col-form-label">Correo:</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="email" maxlength="20" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="contraseña" maxlength="15" required>
                    </div>
                    <label for="confirmacion" class="col-sm-2 col-form-label">Confirmación:</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="confirmacion" maxlength="15" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="date" class="col-sm-4 col-form-label">Fecha de ingreso:</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <label for="puesto" class="col-sm-2 col-form-label">Puesto:</label>
                    <div class="col-sm-3">
                        <select id="disabledSelect" class="form-select" required>
                            <option>Director</option>
                            <option>Administrador</option>
                            <option>Secretario/a</option>
                            <option>Auxiliar</option>
                            <option>Coordinador</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="area" class="col-sm-2 col-form-label">Area:</label>
                    <div class="col-sm-4">
                        <select id="disabledSelect" class="form-select">
                            <option>Administracion</option>
                            <option>Gestion Tecnica</option>
                            <option>Mediateca</option>
                            <option>Ludoteca</option>
                            <option>Acervo General</option>
                        </select>
                    </div>

                    <label for="estatus" class="col-sm-2 col-form-label">Estatus:</label>
                    <div class="col-sm-4">
                        <select id="disabledSelect" class="form-select">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-dark mx-auto" style="width: 100%; color: white;">Insertar</button>

            </form>
            <br>
        </article>

        <article class="col-lg-5">
            <center>
                <br>

                <br>
                <br><br>
            </center>
        </article>



    </main>
</center>