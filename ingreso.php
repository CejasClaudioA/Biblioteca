<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Biblioteca</title>
  </head>
  <body>
    <center><h2 class="col-3" style="margin-top:20px">Sistema de Gestión de Biblioteca</h2></center>
    <center><img src="./img/logoUner4.png" class="imgLogo"</center>
    <form action="login.php" method="POST">
        <div class="container col-2"  style="margin-top:20px">
            <input class="form-group form-control" id="txtUsuario" name="txtUsuario" type="text" placeholder="Usuario" autofocus="true">
            <input class="form-group form-control" id="txtPassword" name="txtPassword" type="password" placeholder="Contraseña">
<!--            <div id="error" class="alert alert-danger" role="alert">
            Usuario o Contraseña incorrecta.
            </div>-->
            <a href="#"> Olvide mi contraseña</a>
            <button class="btn btn-primary btn-block" role="button" action="procesoIngreso.php" method="POST" type="submit">Ingresar</button>
        </div>
    </form>
  <center class="container col-3" style="margin-top:20px; color:black">¿Necesitas una cuenta? <a href="registro.php">Registrarse</a></center>
  
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
