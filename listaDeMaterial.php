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

    <form class="container" style="margin-top: 15px; background:#D4D5D7">

        <div>
        <div class="form-row">      
            <div class="col-md-10">
                <input class="form-control mr-sm-2" type="search" name="buscarNombre" id="buscarNombre" placeholder="Buscar por Titulo" aria-label="Buscar" autofocus>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary my-2 my-sm-0 btn-block" type="submit" onclick="getOutput($('#buscarNombre').val());return false;">Buscar</button>
            </div>
        </div>
        <div id="codigoPHP" name="codigoPHP" style="margin-top: 20px">
            <?php
//                include 'config.php';
//                $var = '';
//                $num=0;
//                $numFila=0;
//                $sentencia="SELECT * FROM documentos";
//                $resultado= $conexion->query($sentencia) or die (mysqli_error($conexion));
//                    if ($resultado->num_rows > 0) {
//                        //echo"<table class="."table".">";
//                        echo'<table class="table" id="table">';
//                        echo"<thead class="."thead-dark".">";
//                        echo'<tr class="clickable-row">';
//                        echo"<th>Nro Inventario</th>";
//                        echo"<th>Nombre</th>";
//                        echo"<th>Formato</th>";
//                        echo"<th>Año</th>";
//                        echo"<th>Edicion</th>";
//                        echo"<th>Disponible</th>";
//                        echo"</tr>";
//                        echo"</thead>";                  
//                        
//                        while($row=$resultado->fetch_assoc()){                            
//                            echo "<tr>";
//                            echo'<tbody style="cursor:pointer">
//                            <tr id='.$numFila++.' onclick="seleccionar(this, '.$numFila.')"  data-toggle="modal" data-target="#eliminarMaterial">';
//                            echo "<td id=".$num++."><b>".$row["id_inventario"]."</b></td>";
//                            echo "<td id=".$num++."><b>".$row["nombre"]."</b></td>";
//                            echo "<td id=".$num++."><b>".$row["formato"]."</b></td>";
//                            echo "<td id=".$num++."><b>".$row["anio"]."</b></td>";
//                            echo "<td id=".$num++."><b>".$row["edicion"]."</b></td>";
//                            echo "<td id=".$num++."><b>".$row["disponible"]."</b></td>";
//                            echo "</tr>";
//                        }
//                        echo "</table>";
//                    }
           ?>
        </div>
        </div>
    </form>

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
        
<!--        <button class="btn btn-success btn-block" style="margin-top: 15px"role="button" method="POST" type="submit" disabled="true">Modificar</button>      -->
<!--<button class="btn btn-danger btn-block" style="margin-top: 15px" type="button" id="botonEliminar" name="botonEliminar" data-toggle="modal" data-target="#eliminarMaterial">
            Eliminar
        </button>      -->

        
        <!-- Modal -->
    <form action="eliminacionMaterial.php" method="POST">
        <div class="modal fade" id="eliminarMaterial" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModal" style="color: black">¿Estás seguro?</h5>
                        <a class="close" href="listaDeMaterial.php" role="button">
                        <!--Comente este boton<button type="submit" class="close" data-dismiss="modal" aria-label="Close" >-->
                        <span aria-hidden="true">&times;</span>
                        <!--</button>-->
                        </a>
                    </div>
                <div class="modal-body" style="color: grey">
                ¿Quieres realizar alguna acción sobre este material?
                <!--          <label id="labelNombre"></label>-->
                </div>
        <div class="modal-body" style="color: grey">
            <input class="form-control mr-sm-2" id="datoEliminar" action="" name="datoEliminar" value="as">
      </div>
      <div class="modal-footer">
        <button role="button" class="btn btn-dark" method="POST" name="botonModificar">Modificar</button>
        <button role="button" class="btn btn-danger" method="POST" name="botonEliminar">Eliminar</button>
      </div>
    </div>
  </div>
</div>
        </form>
    
    

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
<!--    <script src="./js/formularioDocumentacion.js"></script>
-->    <script src="./js/seleccionarFila.js"></script>
</body>
</html>