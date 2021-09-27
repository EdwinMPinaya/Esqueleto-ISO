<?php 
    include("conexion.php");

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($conex,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <h1>Bienvenido Usuario Administrador</h1>
            <div class="container mt-5">
                    <div class="row"> 
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="agregar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="celular" placeholder="Celular">
                                    <input type="text" class="form-control mb-3" name="codigo_universitario" placeholder="Codigo universitario">
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                                    <input type="text" class="form-control mb-3" name="password" placeholder="Password">
                                   <div class="form-control mb-3">
                                    <label for="id_tipo_cargo">Tipo usuario</label>
                                    <?php 

                                    $query_rol = mysqli_query($conex,"SELECT * FROM rol");

                                    $result_rol=mysqli_num_rows($query_rol);
                                    ?>
                                    <select name="id_tipo_cargo" id="id_tipo_cargo">
                                    <?php 
                                    if($result_rol> 0 )
                                    {
                                        while ($rol = mysqli_fetch_array($query_rol)) {
                                            ?>
                                            <option value="<?php  echo $rol["id_tipo_cargo"]; ?> "><?php echo $rol ["descripción"] ?> </option>
                                            <?php    
                                        }
                                    }
                                    ?>
                                    </select>
                                     </div>
                            
                                    <input type="submit" class="btn btn-primary"
                                     >
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Celular</th>
                                        <th>Codigo Universitario</th>
                                        <th>Usuario</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['celular']?></th>
                                                <th><?php  echo $row['codigo_universitario']?></th> 
                                                <th><?php  echo $row['usuario']?></th>      
                                                <th><a href='modificar.php ? id=<?php echo $row['id_usuario']; ?> '>Editar</a></th>
                                                <th><a href='eliminar.php ? id=<?php echo $row['id_usuario']; ?> '>Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>''
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>