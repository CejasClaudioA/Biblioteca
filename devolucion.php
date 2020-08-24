<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet">
        <title>
            Devolucion
        </title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-faded barras col-12">
            <div class="row col">
            <a class="navbar-brand" href="index.php" style="color:#fff">Inicio</a>
            </div>
</nav>
    
            <div class="container main-content" style="margin-top: 10px">
    
                <h3 style="color:#000">Devolucion:</h3>


        <div style="color:#000">

            <div class="row">
<!--                <div class="col-4">
                    <h3>Lista de socios:</h3>
                </div>-->
                <div class="col-8">
                    <div class="form-row" method="POST">      
                        <div class="col-md-10">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" name="buscarDNI" id="buscarDNI" autofocus>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary my-2 my-sm-0 btn-block" type="submit" onclick="buscarDNI($('#buscarDNI').val());return false;">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="table table-striped" id="tabla" style="margin-top: 10px">
                </div>
                    
                            <script>
            function buscarDNI(dni) {
                var parametros = {
                    "buscarDNI": dni
                };
                $.ajax({
                    data: parametros,
                    url: 'busquedaPorDNI.php',
                    type: 'post',
                    beforeSend: function(){
                        $("#tabla").html("Procesando")
                    },
                    success: function(response){
                        $("#tabla").html(response);
                    }
                });
                
            }
        </script>
                
<!--<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo" style="color:black">¿Estás seguro?</h5>
      </div>
        <div class="modal-body" style="color:grey">
        ¿Estás seguro que deseas eliminar este usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" name="botonEliminar" id="botonEliminar">SI</button>
      </div>
    </div>
  </div>
</div>-->
                
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>


