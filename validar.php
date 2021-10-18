<?php
include("conexion/conexion.php");

$usuario=$_POST['usuario'];
$password=$_POST['password'];

//$_SESSION['usuario']=$usuario;

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_tipo_cargo']==1){ //usuario administrador
    header("location:usuario_administrador.php");

}
else
if($filas['id_tipo_cargo']==3){ //usuario control
    header("location:usuario_control.php");
}
else
if($filas['id_tipo_cargo']==2){ //usuario frecuente
    header("location:usuario_frecuente.php");
}
else
{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR</h1>
    <?php
} 


