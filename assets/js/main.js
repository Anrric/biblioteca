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

function validarLibrosActualizar(){
    var nombre, autor, año, idp, ide,idl;

    nombre=document.getElementById('name').value;
    autor=document.getElementById('autor').value;
    año=document.getElementById('age').value;
    idp=document.getElementById('idp').value;
    ide=document.getElementById('ide').value;
    idl=document.getElementById('idlibro').value;

  if(nombre==""|| autor==""|| año=="" || idp=="" || ide=="" || idl==""){
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
    }else if(idp.length>2  || ide.leght>2 || isNaN(ide) || isNaN(idp) || isNaN(idl)){
        alert("Los id son incorrectos");
        return false;
    }
}

