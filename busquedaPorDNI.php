<?php
            $output = '';
            $dni = $_POST['buscarDNI'];
            $dni = preg_replace("#[^0-9a-z]i#", "", $dni);
            
            if(!empty($dni)){
                
            
            include 'config.php';
            $query = "SELECT p.id_socio, s.nombre as xxx, s.apellido, p.fecha_inicio, p.fecha_fin, d.nombre as xx, f.nombre FROM prestamos AS p INNER JOIN socios AS s ON p.id_socio = s.documento INNER JOIN documentos as d ON d.id_inventario = p.id_inventario INNER JOIN documento_formato as f ON d.formato = f.id_formato where p.id_socio= "."'".$dni."'"."order by fecha_inicio";

            $result = mysqli_query($conexion, $query);
            $count = mysqli_num_rows($result);


            if ($count == 0) {
                $output = "No hay resultados";
            } else {

                $tabla='<table class="table">
                        <thead class="table-dark">
                        <tr>
                        <th>Nro de socio</th>
                        <th>Nombre</th>
                        <th>Inicio del prestamo</th>
                        <th>Finalizacion del prestamo</th>
                        <th>Tipo de material</th>
                        <th>Nombre del libro</th>
                        </tr>
                        </thead>';
                echo $tabla;
                
                while ($row = mysqli_fetch_array($result)) {
                    $num = 0;
                    $output .= '
                            <tr>
                            <td id=' . $num++ . '><b>' . $row["id_socio"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["xxx"]." ".$row["apellido"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["fecha_inicio"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["fecha_fin"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["nombre"] . '</b></td>
                            <td id=' . $num++ . '><b>' . $row["xx"] . '</b></td>
                                </a>
                           </tr>
                         ';
                }
            }
            }
            echo $output;
            
            ?>