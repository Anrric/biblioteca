<br><br><br><br>

<div class="container-fluid" style="height: 600px; width: 1200px;" align="right">
  <main class="container row">
    <center>
      <article class="col-lg-12">
        <br>
        <h1 style="font-weight: bold;">Empleados existentes</h1>
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
              <th scope="col">Puesto</th>
              <th scope="col">FechaIng</th>
              <th scope="col">Area</th>
              <th scope="col">Estatus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?PHP foreach ($datitos as $Empleados) : ?>
                <td><?= $Empleados['id_empleado']; ?></td>
                <td><?= $Empleados['nombre']; ?></td>
                <td><?= $Empleados['apellidoM']; ?><?= " "; ?><?= $Empleados['apellidoM']; ?></td>
                <td><?= $Empleados['edad']; ?></td>
                <td><?= $Empleados['correo']; ?></td>
                <td><?= $Empleados['contraseña']; ?></td>
                <td><?= $Empleados['id_puesto']; ?></td>
                <td><?= $Empleados['fechaIng']; ?></td>
                <td><?= $Empleados['id_area']; ?></td>
                <td><?= $Empleados['id_estatusE']; ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
        <br><br>
    </center>
    </article>
  </main>
  </center>
</div>