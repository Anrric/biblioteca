<br><br><br><br>
<script>
    function validarLibrosEliminar(){
    var idl;

    idl=document.getElementById('idlibro').value;

    if(idl==""){
        alert("NO puede estar vacio");
        return false;
    }else if(isNaN(idl)){
        alert("El id es incorrecto");
        return false;
    }
}
</script>
<center>
<main class="col-lg-6 container row">
        
        <article>
            <br>
            <center>
            <h1 style="font-weight: bold;">Eliminaci&oacuten de libros</h1>
            </center>
            <br>
            <form method="post" action="eliminandoL" onsubmit="return validarLibrosEliminar();" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="idlibro" class="col-sm-5 col-form-label"style="font-weight: bold;">Id del libro a eliminar:</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" name="idlibro" id="idlibro" min="1" max="100" required>
                    </div>
                </div>
                <hr>

                <br>
                <h6 style="color:gray; text-align:left;">*Ten en cuenta que los libros eliminados no podran recuperarse</h6>
                <br>
                <button type="submit" class="btn btn-dark mx-auto" style="width: 100%;">Eliminar</button>
            </form>
            <br>
        </article>

    </main>
</center>