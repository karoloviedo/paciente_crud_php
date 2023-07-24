<?php require_once("layouts/header.php"); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="" method="GET">
          <?php foreach ($datos as $key => $value): ?>
            <?php foreach ($value as $v): ?>
              <div style="color:#029900;"><b><center>EDITAR PACIENTE</center></b></div><br>
              <input type="hidden" name="id" value="<?php echo $v['id']; ?>">
              <div class="form-group">
                <input name="type_id" type="number" class="form-control" value="<?php echo $v['type_id'] ?>" placeholder="Update">
              </div>
              <div class="form-group">
                <input name="nombre" type="text" class="form-control" value="<?php echo $v['nombre'] ?>" placeholder="Update">
              </div>
              <div class="form-group">
                <input name="apellido" type="text" class="form-control" value="<?php echo $v['apellido'] ?>" placeholder="Update">
              </div>
              <div class="form-group">
                <input name="telefono" type="number" class="form-control" value="<?php echo $v['telefono'] ?>" placeholder="Update">
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" value="<?php echo $v['email'] ?>" placeholder="Update">
              </div>
              <div class="form-group">
                <label for="genero">Género:</label>
                <select name="genero" class="form-control">
                  <option value="masculino" <?php echo ($v['genero'] === 'masculino') ? 'selected' : ''; ?>>Masculino</option>
                  <option value="femenino" <?php echo ($v['genero'] === 'femenino') ? 'selected' : ''; ?>>Femenino</option>
                  <option value="otro" <?php echo ($v['genero'] === 'otro') ? 'selected' : ''; ?>>Otro</option>
                </select>
              </div>
              <input type="submit" name="btn" class="btn btn-success btn-block" value="Update">
              <a href="index.php" type="submit" name="btn" class="btn btn-danger btn-block" value="Cancel">Cancel</a>
              <input type="hidden" name="m" value="actualizar">
            <?php endforeach; ?>
          <?php endforeach; ?>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once("layouts/footer.php"); ?>
