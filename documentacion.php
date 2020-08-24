<!--Esto se tiene que ir, no sirve mas-->

<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet">
        <title>
            Libros
        </title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-faded barras col-12">
            <div class="row col">
                <a class="navbar-brand" href="index.php" style="color:#fff">Inicio</a>
            </div>
        </nav>

    <center><h2>Documentación</h2></center>

    <form class="container" style="margin-top: 15px; background:#D4D5D7" method="POST">

        <div class="form-row">      
            <div class="col-md-10">
                <input class="form-control mr-sm-2" type="search" name="buscarNombre" id="buscarNombre" placeholder="Buscar por Titulo" aria-label="Buscar">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary my-2 my-sm-0 btn-block" type="submit" onclick="getOutput($('#buscarNombre').val());return false;">Buscar</button>
            </div>
        </div>
        <div id="codigoPHP" name="codigoPHP">
           
        </div>
        

        <script>
            function getOutput(nombre) {
                var parametros = {
                    "buscarNombre": nombre
                };
                $.ajax({
                    data: parametros,
                    url: 'prueba.php',
                    type: 'post',
                    beforeSend: function(){
                        $("#codigoPHP").html("Procesando")
                    },
                    success: function(response){
                        $("#codigoPHP").html(response);
                    }
                });
                
            }
        </script>

        <!--  <div class="form-row">
            <div class="form-group col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Material: </label>
                        <select class="form-control" name="material" id="material" disabled="true">
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
              <input type="text" class="form-control" name="titulo" id="titulo" disabled="true">
            </div>
              
          </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAddress">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="isbn" disabled="true">
            </div>
                    
          <div class="form-group col-md-6">
            <label for="inputAddress2">Año:</label>
            <input type="text" class="form-control" name="anio" id="anio" disabled="true">
          </div>
                </div>
                
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Edición:</label>
              <input type="text" class="form-control" name="edicion" id="edicion" disabled="true">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Editorial:</label>
              <input type="text" class="form-control" name="editorial" id="editorial" disabled="true">
            </div>
        
              </div>
                    
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputCity">Nombre autor:</label>
                  <input id="nombreAutor" type="text" class="form-control" name="nombreAutor" id="nombreAutor" disabled="true">
              </div>
                  <div class="form-group col-md-6">
                  <label>Apellido autor:</label>
                  <input id="ApellidoAutor" type="text" class="form-control" name="ApellidoAutor" id="ApellidoAutor" disabled="true" placeholder="falta un apellido para el autor y una  tabla autores creo, lo deshabilite">
              </div>
              </div>-->

        <button class="btn btn-info btn-block" style="margin-top: 15px"role="button" method="POST" type="submit" disabled="true">Prestar</button>      
        <button class="btn btn-success btn-block" style="margin-top: 15px"role="button" method="POST" type="submit" disabled="true">Modificar</button>      
        <button class="btn btn-danger btn-block" style="margin-top: 15px"role="button" method="POST" type="submit" disabled="true">Eliminar</button>      
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="./js/formularioDocumentacion.js"></script>
</body>
</html>