<?php

include("conexion.php");

$id_usuario=$_GET['id'];

$sql=("DELETE FROM usuarios WHERE  id_usuario ='$id_usuario'");
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: usuario_administrador.php");
        echo "<script laguage='JavaScript'>
alert('ERROR:fatality'); location.assign ('usuario_administrador.php');
</script>";
    }
    else
    {
        echo "<script laguage='JavaScript'>
alert('ERROR:no se pudo eliminar'); location.assign ('usuario_administrador.php');
</script>";
    }
?>
