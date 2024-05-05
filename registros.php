<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap en HTML</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-sm bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">Ricardo Llanos</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="registros.php">Registros</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-warning card-outline text-center">
                        <h5>Registro de Personas</h5>
                        <?php
                        include "controladores/conexion.php";
                        $consulta = $conexion->query("SELECT*FROM persona");
                        $row = mysqli_num_rows($consulta);
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Primer Nombre</th>
                                    <th scope="col">Segundo Nombre</th>
                                    <th scope="col">Primer Apellido</th>
                                    <th scope="col">Segundo Apellido</th>
                                    <th scope="col">Documento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($guardar = $consulta->fetch_assoc()) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $guardar['id_usuario']; ?>
                                        </th>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['nombre1']); ?>
                                        </td>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['nombre2']); ?>
                                        </td>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['apellido1']); ?>
                                        </td>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['apellido2']); ?>
                                        </td>
                                        <td>
                                            <?php echo $guardar['documento']; ?>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <a href="index.php" class="btn btn-success btn-lg">Nuevo Registro</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!--   <script src="js/bootstrap.min.js"></script> -->
</body>

</html>