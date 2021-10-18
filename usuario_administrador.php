<?php
include("conexion/conexion.php");

$sql = "SELECT *  FROM usuarios";
$sqli = "SELECT *  FROM imagen";
$sculo = "SELECT *  FROM vehiculo";
$vehiculo = mysqli_query($conex, $sculo);
$res = mysqli_query($conex, $sqli);
$query = mysqli_query($conex, $sql);

$row = mysqli_fetch_array($query);
$rouse = mysqli_fetch_array($vehiculo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> PAGINA ADMINISTRADOR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<h1 class="display-5">Usuario Administrador</h1>
<div class="botonnes">
<div class="row justify-content text-center">
            <div class="col-xl-6">
                <div class="card">
                    <a href="" data-toggle="modal" data-target=""><img src="imagenes/auto1.jpg" alt="" class="card-img-top"></a>
                    <div class="modal fade" id="<?php echo $resultado['img_num'] . $resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                            <img src="imagenes/auto1.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
                </div>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar Auto</button>
                <form action="CRUD_VEH/insertar.php" method="POST" name enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registro de Vehiculo Auto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Tipo:</label>
                                            <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Marca:</label>
                                            <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Modelo:</label>
                                            <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Color:</label>
                                            <input type="text" class="form-control mb-3" name="color" placeholder="color">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Placa:</label>
                                            <input type="text" class="form-control mb-3" name="placa" placeholder="placa">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Ingreso:</label>
                                            <input type="text" class="form-control mb-3" name="ingreso" placeholder="ingreso">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Salida:</label>
                                            <input type="text" class="form-control mb-3" name="salida" placeholder="salida">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
</div>
            <div class="row justify-content text-center">
            <div class="col-lg-4 col-xl-6 col-md-4 col-sm-5 pb-4">
                <div class="card">
                    <a href="" data-toggle="modal" data-target=""><img src="imagenes/moto1.jpg" alt="" class="card-img-top"></a>
                    <div class="modal fade" id="<?php echo $resultado['img_num'] . $resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                            <img src="imagenes/moto1.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
                </div>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar Moto</button>
                <form action="CRUD_VEH/insertar.php" method="POST" name enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registro de Vehiculo Moto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Tipo:</label>
                                            <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Marca:</label>
                                            <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Modelo:</label>
                                            <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Color:</label>
                                            <input type="text" class="form-control mb-3" name="color" placeholder="color">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Placa:</label>
                                            <input type="text" class="form-control mb-3" name="placa" placeholder="placa">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Ingreso:</label>
                                            <input type="text" class="form-control mb-3" name="ingreso" placeholder="ingreso">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Salida:</label>
                                            <input type="text" class="form-control mb-3" name="salida" placeholder="salida">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <div class="row justify-content text-center">
                <div class="col-lg-4 col-xl-6 col-md-4 col-sm-6 pb-2">
                    <div class="card">
                        <a href="" data-toggle="modal" data-target="'#'"><img src="imagenes/usuario1.jpg" alt="" class="card-img-top"></a>
                        <div class="modal fade" id="<?php echo $resultado['img_num'] . $resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="imagenes/usuario1.jpg" alt="" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usuario" data-whatever="@fat">Registrar Usuario</button>
                    <form action="agregar.php" method="POST" name enctype="multipart/form-data">
                        <div class="modal fade" id="usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Registro de usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Nombres:</label>
                                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Apellidos:</label>
                                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Celular:</label>
                                                <input type="text" class="form-control mb-3" name="celular" placeholder="Celular">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Codigo:</label>
                                                <input type="text" class="form-control mb-3" name="codigo_universitario" placeholder="Codigo universitario">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Usuario:</label>
                                                <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Password:</label>
                                                <input type="text" class="form-control mb-3" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Tipo de Usuario:</label>
                                                <div class="form-control mb-3">
                                                    <?php

                                                    $query_rol = mysqli_query($conex, "SELECT * FROM rol");

                                                    $result_rol = mysqli_num_rows($query_rol);
                                                    ?>
                                                    <select name="id_tipo_cargo" id="id_tipo_cargo">
                                                        <?php
                                                        if ($result_rol > 0) {
                                                            while ($rol = mysqli_fetch_array($query_rol)) {
                                                        ?>
                                                                <option value="<?php echo $rol["id_tipo_cargo"]; ?> "><?php echo $rol["descripción"] ?> </option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </FORm>
                </div>

                <div class="row justify-content text-center">
                <div class="col-lg-4 col-xl-6 col-md-4 col-sm-6 pb-2">
                    <div class="card">
                        <a href="" data-toggle="modal" data-target="'#'"><img src="imagenes/estado.jpg" alt="" class="card-img-top"></a>
                        <div class="modal fade" id="<?php echo $resultado['img_num'] . $resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="imagenes/estado.jpg" alt="" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#parqueo" data-whatever="@fat">Parqueo</button>
                    <form action="agregar.php" method="POST" name enctype="multipart/form-data">
                        <div class="modal fade" id="parqueo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Aparqueamiento</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <?php
                                            include("conexion/conexion.php");

                                            $reserva = "SELECT *  FROM  reserva";
                                            $espacio = mysqli_query($conex, $reserva);
                                            $esp = mysqli_fetch_array($espacio);
                                            ?>
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <table class="table">
                                                        <thead class="table-success table-striped">
                                                            <tr>

                                                                <th>Espacio</th>
                                                                <th>Estado</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php
                                                            while ($esp = mysqli_fetch_array($espacio)) {
                                                            ?>
                                                                <tr>

                                                                    <th><?php echo $esp['espacio'] ?></th>
                                                                    <th><?php echo $esp['estado'] ?></th>
                                                                    <th> <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                                                                        <label class="btn btn-outline-success" for="success-outlined">Libre</label> 
                                                                        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                                                                        <label class="btn btn-outline-danger" for="danger-outlined">Ocupado</label> 
                                                                   </th>

                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </FORm>
                </div>

            </div>
        </div>
        </div>
        <div class="tablas">
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8-center">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                        <h1>Lista de Usuarios</h1>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Celular</th>
                            <th>Codigo universitario</th>
                            <th>Usuario</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['apellido'] ?></th>
                                <th><?php echo $row['celular'] ?></th>
                                <th><?php echo $row['codigo_universitario'] ?></th>
                                <th><?php echo $row['usuario'] ?></th>
                                <th><a href='modificar.php ? id=<?php echo $row['id_usuario']; ?> '>Editar</a></th>
                                <th><a href='eliminar.php ? id=<?php echo $row['id_usuario']; ?> '>Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Placa</th>
                                <th>Ingreso</th>
                                <th>Salida</th>
                            </tr>
                        </thead>

                        <tbody>
                            <h1>Lista de Vehiculos</h1>
                            <?php
                            while ($rouse = mysqli_fetch_array($vehiculo)) {
                            ?>
                                <tr>

                                    <th><?php echo $rouse['tipo'] ?></th>
                                    <th><?php echo $rouse['marca'] ?></th>
                                    <th><?php echo $rouse['modelo'] ?></th>
                                    <th><?php echo $rouse['color'] ?></th>
                                    <th><?php echo $rouse['placa'] ?></th>
                                    <th><?php echo $rouse['ingreso'] ?></th>
                                    <th><?php echo $rouse['salida'] ?></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>




        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>