<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet">
        <title>
            Formulario Registro
        </title>
    </head>
    <body>
    <center><h2>Registro de Usuario:</h2></center>
        <div class="container col-6" style="margin-top:20px">
            
            <form action="procesoRegistro.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre completo:</label>
                <input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" autofocus="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Dni:</label>
                <input type="number" class="form-control" id="dni" name="dni">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña:</label>
                <input type="password" class="form-control" id="contrasenia" name="contrasenia">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <label for="exampleFormControlInput1">Género:</label>
    <div class="form-check">
        
  <input class="form-check-input" type="radio" id="genero" name="genero" value="Masculino">
  <label class="form-check-label" for="exampleRadios1">
    Masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" id="genero" name="genero" value="Femenino">
  <label class="form-check-label" for="exampleRadios2">
    Femenino
  </label>
</div>
            <button class="btn btn-success btn-block" role="button" method="POST" type="submit">Listo!</button>
            </form>
        </div>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

