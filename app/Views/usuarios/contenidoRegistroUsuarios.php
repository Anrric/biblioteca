<br><br><br><br>
<center>
<main class="container row col-lg-6">
<script>
  function validar1(){
    var nombre, apellidop, apellidom, edad, curp, contraseña, confirmacion;
    var emailRegex = /\w+@\w+\.+[a-z]/;
  

    nombre=document.getElementById('name').value;
    apellidop=document.getElementById('lastname1').value;
    apellidom=document.getElementById('lastname2').value;
    edad=document.getElementById('age').value;
    curp=document.getElementById('curp').value;
    email=document.getElementById('email').value;
    contraseña=document.getElementById('contrasena').value;
    confirmacion=document.getElementById('confirmacion').value;

  if(nombre==""|| apellidop==""|| apellidom=="" || edad=="" || curp==""|| email=="" || contraseña=="" || confirmacion==""){
        alert("NO puede haber campos vacios");
        return false;
    }else if(!isNaN(nombre) || !isNaN(apellidop) || !isNaN(apellidom)){
        alert("No puedes utilizar numeros en Nombre y Apellidos");
        return false;
    }else if(nombre.length>15){
        alert("El nombre es muy grande");
        return false;
    }else if(apellidop.length>15){
        alert("El apellido paterno es muy grande");
        return false;
    }else if(apellidom.length>15){
        alert("El apellido materno es muy grande");
        return false;
    }else if(contraseña.length>15){
        alert("La contraseña es muy grande");
        return false;
    }else if(curp.length>19){
        alert("La CURP es muy grande");
        return false;
    }else if(contraseña != confirmacion){
        alert("Las contraseñas no coinciden");
        return false;
    }else if(contraseña.legth>15 && confirmacion.leght>15){
        alert("Las contraseñas son muy grandes");
        return false;
    }else if(email.length>30){
        alert("El correo es muy grande");
        return false;
    }else if (!emailRegex.test(email)){
       alert("La dirección de email es incorrecta.");
       return false;
    }else if(isNaN(edad)){
        alert("Edad invalidad");
        return false;
    }
}
</script>
        <article>
            <br>
            <center>
            <h1 style="font-weight: bold">Registro de Usuarios</h1>
            </center>
            <br>
            <form method="post" action="insertandoU" onsubmit="return validar1();" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="name" maxlength="15" required>
                </div>
                <label for="lastname1" class="col-sm-3 col-form-label">Apellido Paterno:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="lastname1" name="lastname1" maxlength="10" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="lastname2" class="col-sm-3 col-form-label">Apellido Materno:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="lastname2" name="lastname2" maxlength="10" required>
                </div>
                <label for="age" class="col-sm-2 col-form-label">Edad:</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="age" name="age" min="18" max="100" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="curp" class="col-sm-2 col-form-label">CURP:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="curp" name="curp" maxlength="19" required>
                </div>
                <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" name="email" maxlength="30" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="contrasena" name="contraseña" maxlength="15" required>
                </div>
                <label for="confirmacion" class="col-sm-2 col-form-label">Confirmación:</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="confirmacion" name="confirmacion" maxlength="15" required>
                </div>
            </div>  
<br>
            <button type="submit" class="btn btn-dark mx-auto" style="width: 100%;">Insertar</button>

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