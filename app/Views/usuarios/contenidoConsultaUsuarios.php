<br><br><br><br>

<div class="container-fluid" style="height: 600px; width: 1200px;" align="right">
<center>
    <main class="container row">
        <article class="col-lg-12">
                <br>
                <h1 style="font-weight: bold;">Usuarios existentes</h1>
                <br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contrase&ntildea</th>
                        <th scope="col">Conf.Contrase&ntildea</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?PHP foreach($datitos as $Usuarios):?>
                      <td><?=$Usuarios['id_usuario'];?></td>
                      <td><?=$Usuarios['nombre'];?></td>
                      <td><?=$Usuarios['apellidoP'];?><?=" ";?><?=$Usuarios['apellidoM'];?></td>
                      <td><?=$Usuarios['edad'];?></td>
                      <td><?=$Usuarios['correo'];?></td>
                      <td><?=$Usuarios['contraseña'];?></td>
                      <td><?=$Usuarios['confContraseña'];?></td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                  </table>
                <br><br>
        </article>
    </main>
<center>
</div>
