<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet">
        <title>
            Formulario
        </title>
    </head>
    <body>
        
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded barras">
      <div class="col ">
          <a class="navbar-brand" href="index.php" style="color:#fff">Inicio</a>
          <i class="fas fa-cogs fa-2x" style="float:right; margin-left: 15px"></i>
          <i class="fas fa-user fa-2x" style="float:right"></i>
          <i class="fas fa-bars fa-2x btn-toolbar"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"style="float:left; margin-right: 50px;"></i>
          
    </div>
  <div class="col collapse-xs navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
      </div>
  </div>
</nav>
        
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre(s):</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" autofocus="true">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido(s):</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tipo</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Documento Único</option>
                <option>Libreta de Enrolamiento</option>
                <option>Libreta Cívica</option>
                <option>Otro</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Numero de Documento:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Domicilio</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
       
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
            <label class="form-check-label" for="exampleRadios1">Alumno</label>
        </div>
        
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Profesor
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
  <label class="form-check-label" for="exampleRadios3">
    Personal de la institución.
  </label>
</div>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
