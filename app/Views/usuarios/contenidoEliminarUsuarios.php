<br><br><br><br>
<script>
    function validarUsuarioEliminar(){
    var idl;

    idu=document.getElementById('idusuario').value;

    if(idu==""){
        alert("NO puede estar vacio");
        return false;
    }else if(isNaN(idu)){
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
            <h1 style="font-weight: bold">Eliminaci&oacuten de Usuarios</h1>
            </center>
            <br>
            <form method="post" action="eliminandoU" onsubmit="return validarUsuarioEliminar();" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="idusuario" class="col-sm-5 col-form-label"style="font-weight: bold;">Id del usuario a eliminar:</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" id="idusuario" name="idusuario" min="1" max="100" required>
                    </div>
                </div>
                <hr>

                <br>
                <h6 style="color:gray; text-align:left;">*Ten en cuenta que los usuarios eliminados no podran recuperarse</h6>
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