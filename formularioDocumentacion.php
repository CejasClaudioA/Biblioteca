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
    <center><h2>Alta Documentación</h2></center>
    
    <form class="container" style="margin-top: 15px; background:#D4D5D7" method="POST" action="procesoAltaDocumentacion.php">
  <div class="form-row">
    <div class="form-group col-md-6">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Material: </label>
                <select class="form-control" name="material" id="material">
                    <option value="1">Libro</option>
                    <option value="2">Revista</option>
                    <option value="3">CD</option>
                    <option value="4">DVD</option>
                    <option value="5">Blue-Ray Disc</option>
                </select>
            </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Titulo:</label>
      <input type="text" class="form-control" required name="titulo" id="titulo" autofocus>
    </div>
  </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">ISBN:</label>
        <input type="text" class="form-control" required id="isbn" name="isbn">
    </div>
            
  <div class="form-group col-md-6">
    <label for="inputAddress2">Año:</label>
    <input type="text" class="form-control" name="anio" id="anio">
  </div>
        </div>
        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Edición:</label>
      <input type="text" class="form-control" required name="edicion" id="edicion">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Editorial:</label>
      <input type="text" class="form-control" required name="editorial" id="editorial">
    </div>

      </div>
            
      <div class="form-row">
      <div class="form-group col-md-6">
          <label>Nombre autor:</label>
          <input id="nombreAutor" name="nombreAutor[]" required type="text" class="form-control">
      </div>
          <div class="form-group col-md-6">
          <label>Apellido autor:</label>
          <input id="apellidoAutor" name="apellidoAutor[]" required type="text" class="form-control">
      </div>
      </div>
            <a href="#" id="add_Autor" class="btn btn-primary badge badge-light" style="color:black" id="add_email"> +Añadir otro autor</a>
          
<div class="form-row">
    <div class="form-group col-md-3">
      <label >Cantidad: </label>
      <input type="number" class="form-control" required name="cantidad" id="cantidad" min="1" placeholder="1">      
    </div>
</div>
            
    <button class="btn btn-success btn-block" style="margin-top: 15px"role="button" method="POST" type="submit">Listo!</button>      
</form>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/formularioDocumentacion.js"></script>
    </body>
</html>
