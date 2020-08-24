<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet">
        <title>
            Material
        </title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-faded barras col-12">
            <div class="row col">
            <a class="navbar-brand" href="index.php" style="color:#fff">Inicio</a>
            </div>
</nav>
    
            <div class="container main-content" style="margin-top: 10px">
    


        <div style="color:#000">

            <div class="row">
                <div class="col-4">
                    <h3>Lista de socios:</h3>
                </div>
                <div class="col-8">
                    <div class="form-row">      
                        <div class="col-md-12">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        </div>
                    </div>
                </div>
                
<!--                <div class="col-3">
                    <select class="form-control" id="ordenar">
                        <option value="nombre" >Ordenar por nombre</option>
                        <option value="formato" >Formato</option>
                        <option value="edicion" >Edición</option>
                        <option value="anio" >Año:</option>
                    </select>
            </div>-->
            </div>
        </div>
            <div class="table table-striped" id="tabla">
                
                <?php
                include 'config.php';
                $var = '';
                $num=0;
                $numFila=0;
                $sentencia="SELECT * FROM socios ORDER BY nombre";
                $resultado= $conexion->query($sentencia) or die (mysqli_error($conexion));
                    if ($resultado->num_rows > 0) {
                        //echo"<table class="."table".">";
                        echo'<table class="table" id="table">';
                        echo"<thead class="."thead-dark".">";
                        echo"<tr>";
                        echo"<th>Nombre</th>";
                        echo"<th>Apellido</th>";
                        echo"<th>Email</th>";
                        echo"<th>Nro Documento</th>";
                        echo"<th>Celular</th>";
                        echo"<th>Tipo de socio</th>";
                        echo"</tr>";
                        echo"</thead>";                  
                        
                        while($row=$resultado->fetch_assoc()){                            
                            $var='<td id=' . $num++ . '><b> <button id='."modificar$num".' type="button" class="btn btn-info"> Modificar </button> </b></td>
                            <td id=' . $num++ . '><b> <button id='."eliminar$num".' type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar"> Eliminar </button> </b></td>';
                            echo "<tr>";
                            //echo $var;
                            echo'<tbody style="cursor:pointer">
                            <tr id='.$numFila++.' onclick="seleccionar(this, '.$numFila.')">';
                            echo "<td id=".$num++."><b>".$row["nombre"]."</b></td>";
                            echo "<td id=".$num++."><b>".$row["apellido"]."</b></td>";
                            echo "<td id=".$num++."><b>".$row["email"]."</b></td>";
                            echo "<td id=".$num++."><b>".$row["documento"]."</b></td>";
//                            echo "<td><a href=".$row["documento"].">".$row["documento"]."</a></td>";
                            echo "<td id=".$num++."><b>".$row["telefono"]."</b></td>";
                            echo "<td id=".$num++."><b>".$row["tipo_socio"]."</b></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                ?>
            </div>
                
        <button class="btn btn-success btn-block" style="margin-top: 15px"role="button" method="POST" type="submit">Modificar</button>      
        <button class="btn btn-danger btn-block" style="margin-top: 15px"role="button" method="POST" type="submit" id="botonEliminar" name="botonEliminar" data-toggle="modal" data-target="#eliminar">Eliminar</button>      
        
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div>
                
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/seleccionarFila.js"></script>
    </body>
</html>
