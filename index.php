<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="">
</head>
    <body>
        <main class="diseño">
            <div class="imagen">
                <img src="imagenes/icono1.png" width="200" height="200">
            </div>
            <div class="inicio">
                <div class="inicio-sesion">
                <form action="validar.php" method="POST">
                    <h1>Inicio de Sesión</h1>
                    <p>Usuario <input type="text" class="campos" placeholder="Ingrese su usuario" name="usuario"></p>
                    <p>Contraseña <input type="password" class="campos" placeholder="Ingrese su contraseña" name="password"></p>
                    <input type="submit" value="enviar">
                </form>
                </div>
            </div>
        </main>
    </body>
</html>