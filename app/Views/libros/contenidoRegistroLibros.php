<br><br><br><br>
<script>
    function validarLibros(){
    var nombre, autor, año, idp, ide;

    nombre=document.getElementById('name').value;
    autor=document.getElementById('autor').value;
    año=document.getElementById('age').value;
    idp=document.getElementById('idp').value;
    ide=document.getElementById('ide').value;

    if(nombre==""|| autor==""|| año=="" || idp=="" || ide==""){
        alert("NO puede haber campos vacios");
        return false;
    }else if(nombre.length>15){
        alert("El nombre es muy grande");
        return false;
    }else if(autor.length>15){
        alert("El nombre del autor es muy grande");
        return false;
    }else if(age.length>4 && isNaN(age)){
        alert("El año es muy incorrecto");
        return false;
    }else if(idp.length>2  || ide.leght>2 || isNaN(ide) || isNaN(idp)){
        alert("Los id son incorrectos");
        return false;
    }
}
</script>
<center>
<main class="col-lg-6 container row">
        

        <article>
            <br>
            <center>
            <h1>Registro de libros</h1>
            </center>
            <br>
            <form action="" onsubmit="return validarLibros();">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" maxlength="15" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="autor" class="col-sm-2 col-form-label">Autor:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="autor" maxlength="15" required>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="age" class="col-sm-2 col-form-label">Año:</label>
                    <div class="col-sm-4">
                    <input type="number" class="form-control" id="age" min="1900" max="2021" required>
                    </div>
                    <label for="inputPassword" class="col-sm-2 col-form-label">Genero:</label>
                    <div class="col-sm-4">
                        <select id="genero" class="form-select">
                        <option>Aventura</option>
                        <option>Infantil</option>
                        <option>Drama</option>
                        <option>Informativo</option>
                        <option>Ficcion</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="idp" class="col-sm-4 col-form-label">ID del Poseedor:</label>
                    <div class="col-sm-3">
                    <input type="number" class="form-control" id="idp" min="1" max="100" required >
                    </div>
                    <label for="inputPassword" class="col-sm-2 col-form-label">Estatus:</label>
                    <div class="col-sm-3">
                        <select id="estatus" class="form-select" >
                        <option>En Reparacion</option>
                        <option>En Prestamo</option>
                        <option>Disp.Prestamo</option>
                        <option>Disp.Biblioteca</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ide" class="col-sm-4 col-form-label">ID del Empleado:</label>
                        <div class="col-sm-3">
                        <input type="number" class="form-control" id="ide" min="1" max="100" required >
                        </div>
                </div>
                <br>
                <button type="submit" class="btn btn-dark mx-auto" style="width: 100%;">Insertar</button>
            </form>
            <br>
        </article>

    </main>
</center>