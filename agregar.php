<?php
include("conexion/conexion.php");
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['celular']) || empty($_POST['codigo_universitario']) || empty($_POST['usuario']) || empty($_POST['password']) || empty($_POST['id_tipo_cargo'])) {
        echo "<script laguage='JavaScript'>
        alert('ERROR:tiene que llenar todos los espacios'); location.assign ('usuario_administrador.php');
        </script>";
    } else {
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$codigo_universitario=$_POST['codigo_universitario'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$id_tipo_cargo=$_POST['id_tipo_cargo'];

$sql="INSERT INTO `usuarios` (nombre,apellido,celular,codigo_universitario,usuario,password,id_tipo_cargo) values('".$nombre."','".$apellido."','".$celular."','".$codigo_universitario."','".$usuario."','".$password."','".$id_tipo_cargo."')";
$query= mysqli_query($conex,$sql);

if ($query) {
    echo "<script laguage='JavaScript'>
alert('REGISTRO CORRECTAMENTE'); location.assign ('usuario_administrador.php');
</script>";
} else {
    echo "<script laguage='JavaScript'>
alert('ERROR:Los datos no fueron ingresados correctamente a la BD'); location.assign ('usuario_administrador.php');
</script>";
}
}

?>