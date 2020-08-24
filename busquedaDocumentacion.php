<?php
    //registrarDocumentacion($_POST['material'],$_POST['titulo'],$_POST['isbn'],$_POST['anio'],$_POST['edicion'],$_POST['editorial'],$_POST['nombreAutor'],$_POST['apellidoAutor']);
    busqueda($_POST['buscarNombre']);
    
    function busqueda($nombreMaterial){
        include 'config.php';
        $sentencia="SELECT * FROM documentos WHERE nombre LIKE "."'%".$nombreMaterial."%'";
        $resultado=$conexion->query($sentencia) or die("Error en la busqueda de la documentación: ". mysqli_error($conexion));
        if ($resultado->num_rows > 0) {
            while($row=$resultado->fetch_assoc()){                            
                echo'<script>';
                echo "alert(Se busco: ".$row["nombre"].");";
                echo "alert(Se busco: ".$row["autores"].");";
//                echo'window.location.href="documentacion.php";';
//                echo 'document.formulario.titulo.value="$row['.nombre.']")';
//                  echo "document.formulario.titulo.value=".$row[nombre];
//                echo "console.log($row[nombre]);";
                echo'</script>';
            }
        }
            
        
    }

?>
