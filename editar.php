<?php

include("conexion/conexion.php");

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$codigo_universitario=$_POST['codigo_universitario'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql="UPDATE usuarios SET  nombre='$nombre',apellido='$apellido',celular='$celular', codigo_universitario='$codigo_universitario',usuario='$usuario',password='$password' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: usuario_administrador.php");
    }
?>