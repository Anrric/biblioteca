<br><br><br><br>

<div class="container-fluid" style="height: 600px; width: 1200px;" align="right">
  <center>
    <main class="container row">
      <article class="col-lg-12">
        <br>
        <h1 style="font-weight: bold;">Libros existentes</h1>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">A&ntildeo</th>
              <th scope="col">Autor</th>
              <th scope="col">Genero</th>
              <th scope="col">Estatus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?PHP foreach ($datitos as $Libros) : ?>
                <td><?= $Libros['id_libro']; ?></td>
                <td><?= $Libros['nombre']; ?></td>
                <td><?= $Libros['año']; ?></td>
                <td><?= $Libros['autor']; ?></td>
                <td><?= $Libros['id_genero']; ?></td>
                <td><?= $Libros['id_estatusL']; ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </article>
    </main>
  </center>
</div>