<?php
require_once("layouts/header.php");
?>
<br>
<main class="container p-3">
  <div class="row" style="margin-left: 370px;">
    <div class="col-md-6">
    <!-- ADD PRODUCT FORM -->
      <div class="card card-body">
        <form action="" method="GET">
            <div style="color:#005199;"><b><center>NUEVO PACIENTE</center></b></div><br>
          <div class="form-group">
            <input type="number" name="type_id" class="form-control" placeholder="Tipo de Documento" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Paciente" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido del Paciente" autofocus required>
          </div>
          <div class="form-group">
            <input type="number" name="telefono" class="form-control" placeholder="Número de Teléfono" minlength="10" maxlength="10" autofocus required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" autofocus required>
          </div>
          <select name="genero" class="form-control" required>
          <option value="">Seleccione una opción</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
          <option value="otro">Otro</option>
        </select>
        <br>
          <input type="submit" name="btn" class="btn btn-success btn-block" value="Save">
          <a href="index.php" type="submit" name="btn" class="btn btn-danger btn-block" value="Cancel">Cancel</a>
          <input type="hidden" name="m" value="guardar">
        </form>
      </div>
    </div>
</main>

<?php
require_once("layouts/footer.php");