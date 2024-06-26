<br><br><br><br>
<script>
    function validarEmpleadosEliminar(){
    var idl;

    ide=document.getElementById('idempleado').value;

    if(ide==""){
        alert("NO puede estar vacio");
        return false;
    }else if(isNaN(ide)){
        alert("El id es incorrecto");
        return false;
    }
}
</script>
<center>
<main class="container row col-lg-6">

        <article>
            <br>
            <center>
            <h1 style="font-weight: bold">Eliminación de Empleados</h1>
            </center>
            <br>
            <form method="post" action="eliminandoE" onsubmit="return validarEmpleadosEliminar()" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="idempleado" class="col-sm-5 col-form-label"style="font-weight: bold;">Id del empleado a eliminar:</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" name="idempleado" id="idempleado" min="1" max="100" required>
                    </div>
                </div>
                <hr>

                <br>
                <h6 style="color:gray; text-align:left;">*Ten en cuenta que los empleados eliminados no podran recuperarse</h6>
                <br>
                <button type="submit" class="btn btn-dark mx-auto" style="width: 100%;">Eliminar</button>
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