<?php    
$num=0;
$cantidadDisponible=0;
$dato=$_POST['datoEliminar'];

    if(isset($_POST['botonEliminar'])){
        buscarMaterial($dato);

    }
    
    if(isset($_POST['botonModificar'])){
        tomarDatos();
        
    }
    
    function tomarDatos(){
        global $dato;
        $nom= substr($dato, 8,-18);
        $datoFinal= str_replace(",", "", $nom);
        $nro= substr($dato, -2);
        include 'config.php';
        $sentencia="SELECT * FROM documentos WHERE nombre LIKE '%$datoFinal%' AND id_inventario='".$nro."'";
        $res=$conexion->query($sentencia) or die("Error en el registro: ". mysqli_error($conexion));
        while($row=$res->fetch_assoc()){
            
                echo'<script>';
                echo'window.location.href="formularioDocumentacion.php"';
//                echo 'var inputTitulo=document.getElementById("titulo");';
//                echo 'inputTitulo.value=('.$row['nombre'].');';
                echo'</script>';
        }
    }
            
//            echo 'window.location.href="index.php"';
  
    
    function buscarMaterial($nombreMaterial){
                $nom= substr($nombreMaterial, 8,-18);
                $nombreFinal= str_replace(",", "", $nom);
                $nro= substr($nombreMaterial, -2);
        
                include 'config.php';
                $sentencia="SELECT * FROM documentos WHERE nombre LIKE '%$nombreFinal%'";
                $res=$conexion->query($sentencia) or die("Error en el registro: ". mysqli_error($conexion));
                while($row=$res->fetch_assoc()){                            
                    $cantidadDisponible= $row["disponible"];
                    if($cantidadDisponible>=2){
                        $sentencia="UPDATE documentos SET disponible='".--$cantidadDisponible."' WHERE nombre LIKE '%$nombreFinal%' AND id_inventario='".$nro."'";
                        $res=$conexion->query($sentencia) or die("Error en el registro: ". mysqli_error($conexion));
                    }
                    if($cantidadDisponible==1){
                        $sentencia="DELETE FROM documentos WHERE id_inventario= '".$nro."'";
                        $res=$conexion->query($sentencia) or die("Error en el registro: ". mysqli_error($conexion));
                    }
                }
                echo'<script>';
                echo'alert("Se modifico el stock o elimino.");';
                echo'window.location.href="index.php"';
                echo'</script>';
            }
    
    ?>
