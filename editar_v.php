<?php

include("conexion/conexion.php");

$id_vehiculo=$_POST['id_vehiculo'];
$tipo=$_POST['tipo'] ;
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placa=$_POST['placa'];
$ingreso=$_POST['ingreso'];
$salida=$_POST['salida'];

$sql="UPDATE vehiculo SET  tipo='$tipo',marca='$marca',modelo='$modelo', color='$color',placa='$placa',ingreso='$ingreso',salida='$salida' WHERE id_vehiculo='$id_vehiculo'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: usuario_administrador.php");
    }
