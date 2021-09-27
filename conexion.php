<?php
$name = "estacionamiento";
$db = "localhost";
$user = 'root';
$password = '';
$conex = mysqli_connect($db, $user, $password, $name);
if (!$conex) {
    echo "<h3>no se a podido conectar con PHP - MySQL, verificaque sus datos.</h3><hr><br>";
} else {
    echo "<h3>conexion exitosa PHP - MySQL. </h3><hr><br>";
}
