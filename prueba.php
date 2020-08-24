 <?php
            $output = '';
            $numFila=0;
            $num=0;
            $nombre = $_POST['buscarNombre'];
            $nombre = preg_replace("#[^0-9a-z]i#", "", $nombre);
            
            if(!empty($nombre)){
                
            
            include 'config.php';
            $query = "SELECT * FROM documentos WHERE  (nombre LIKE '%$nombre%')";

             $result = mysqli_query($conexion, $query);
            $count = mysqli_num_rows($result);


            if ($count == 0) {
                $output = "No se encontraron resultados!";
            } else {
                 $output .= '
                            <table class="table" id="table">
                        <thead class="table-dark">
                        <tr class="clickable-row">
                        <th>Nro. Inventario</th>
                        <th>Nombre</th>
                        <th>Formato</th>
                       
                        <th>Año</th>
                        <th>Edición</th>
                        <th>Disponibilidad</th>
                        </tr>
                        </thead>';
            

                while ($row = mysqli_fetch_array($result)) {
                   
                    $output .=                      
                            
                           
                            '<tbody style="cursor:pointer">
                            <tr id='.$numFila++.' onclick="seleccionar(this, '.$numFila.')" data-toggle="modal" data-target="#eliminarMaterial" >
                            <td id=' . $num++ . '><b>' .$row["id_inventario"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["nombre"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["formato"] . '</b></td>
                            
                            <td id=' . $num++ . '><b>' . $row["anio"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["edicion"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["disponible"] . '</b></td>
                           </tr>
                           <tbody>'
                            ;
                       
                }
                $output .=   '</table>';
            }
                                    
            }else{
                echo '<script>';
                echo 'alert("Rellene algun campo");';
                echo '</scrip>';
            }
            echo $output;
            
            ?>

