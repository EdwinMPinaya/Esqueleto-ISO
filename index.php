<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio Sesion</title>
</head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="row justify-content-center pt-5 mt-5 m-1">
        <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">    
            <main class="diseño">
            <div class="titulito">
                <h2>Parqueo Unifranz</h2>
            </div>
            
            <div class="imagen">
                <img src="imagenes/parqueo.png" width="200" height="200">
            </div>
            <div class="inicio">
                <div class="inicio-sesion">
                <form action="validar.php" method="POST">
                    
                    <h5>Inicio de Sesión</h5>
                    <div class="formu">
                    <p>Usuario &nbsp &nbsp &nbsp <input type="text" class="campos" placeholder="Ingrese su usuario" name="usuario"></p>
                    <p>Contraseña <input type="password" class="campos" placeholder="Ingrese su contraseña" name="password"></p>
                    </div>
                    <input type="submit" value="Enviar">
                </form>
                </div>
            </div>
            </div> 
            </div>  
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>