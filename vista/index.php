<?php
require_once("layouts/header.php");
?>
<body class="d-flex flex-column h-100">
<div class="container py-3">
        <main>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div><b>CRUD PACIENTE INUI</b>
                            <a href="index.php?m=nuevo" class="btn btn-primary float-right">NUEVO PACIENTE</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tipo de Documento</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Género</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        if(!empty($dato)):
                                            foreach($dato as $key => $value)
                                                foreach($value as $v):?>
                                    <tr>
                                        <td><?php echo $v['id'] ?></td>
                                        <td><?php echo $v['type_id'] ?></td>
                                        <td><?php echo $v['nombre'] ?></td>
                                        <td><?php echo $v['apellido'] ?></td>
                                        <td><?php echo $v['telefono'] ?></td>
                                        <td><?php echo $v['email'] ?></td>
                                        <td><?php echo $v['genero'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href="index.php?m=editar&id=<?php echo $v['id']?>">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a class="btn btn-danger" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('¿ESTA SEGURO DE ELIMINAR EL PRODUCTO?'); false">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        </td>
                                    </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                <tr>
                                    <td colspan="3" style="color: red;"><b>NO HAY REGISTROS DE PACIENTES</b></td>
                                </tr>
                                        <?php endif ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<?php
require_once("layouts/footer.php");