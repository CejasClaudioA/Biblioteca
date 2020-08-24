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
        
        
            
        <form class="container" style="margin-top: 15px; background:#D4D5D7" method="POST" action="procesoAltaUsuario.php">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label>Nombre:</label>
      <input type="text" class="form-control" name="nombre" id="nombre" required>
    </div>
      <div class="form-group col-md-3">
                <div class="form-group">
                <label>Apellido: </label>
                <input type="text" class="form-control" name="apellido" id="apellido" required>
            </div>
    </div>
      <div class="form-group col-md-6">
      <label>Email:</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>
  </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de documento: </label>
                <select class="form-control" name="tipoDocumento" id="tipoDocumento">
                    <option value="1">DNI</option>
                    <option value="2">LIBRETA DE ENROLAMIENTO</option>
                    <option value="3">LIBRETA CÍVICA</option>
                    <option value="4">OTRO</option>
                </select>
            </div>
    </div>
            
  <div class="form-group col-md-6">
    <label for="inputAddress2">Número de Documento:</label>
    <input type="text" class="form-control" name="nro" id="nro" required>
  </div>
        </div>
        
  <div class="form-row">
        <div class="form-group col-md-4">
                <div class="form-group">
                <label>Provincia: </label>
                <input type="text" class="form-control" name="provincia[]" id="provincia" required>
                </div>
        </div>
      <div class="form-group col-md-4">
        <label>Localidad: </label>
        <input type="text" class="form-control" name="localidad[]" id="localidad" required>
    </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Domicilio:</label>
        <input type="text" class="form-control" name="direccion[]" id="direccion" required>
    </div>
      </div>
            
    <a href="#" id="add_domicilio" class="btn btn-primary badge badge-light" style="color:black" id="add_domicilio"> +Añadir otro domicilio</a>
    

    <div class="form-row" style="margin-top: 5px">
        <div class="form-group col-md-6">
            <label for="inputAddress2">Nro Telefono:</label>
            <input type="text" class="form-control" name="celular" id="celular" required>
        </div>
<!--        <div class="custom-file col-md-6">
            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            <input type="file" class="custom-file-input" id="foto" lang="es" name="foto">
        </div>-->
    </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="alumno" value="1" required>
            <label class="form-check-label" for="tipoSocio">
                Estudiante
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="docente" value="2" required>
            <label class="form-check-label" for="tipoSocio">Docente</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="personal" value="3" required>
            <label class="form-check-label" for="tipoSocio">Personal de la institución</label>
        </div>
        
    <button class="btn btn-success btn-block" style="margin-top: 15px"role="button" method="POST" type="submit">Listo!</button>      
</form>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formularioUsuario.js"></script>
    </body>
</html>

