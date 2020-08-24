<?php
        
//        $id_inventario='';
        $nombres=$_POST['nombreAutor'];
        $apellidos=$_POST['apellidoAutor'];
        
        
    registrarDocumentacion($_POST['material'],$_POST['titulo'],$_POST['isbn'],$_POST['anio'],$_POST['edicion'],$_POST['editorial'],$_POST['cantidad']);
    
    function registrarDocumentacion($material,$titulo,$isbn,$anio,$edicion,$editorial,$cantidad){
        include 'config.php';
        $sentencia="INSERT INTO documentos (formato,nombre,isbn,anio,edicion,editorial,disponible) VALUES('".$material."','".$titulo."','".$isbn."','".$anio."','".$edicion."','".$editorial."','".$cantidad."')";
        $conexion->query($sentencia) or die("Error en el alta de la documentación: ". mysqli_error($conexion));
       
        $sentencia="SELECT id_inventario FROM documentos WHERE nombre= '".$titulo."'";
        $resultado=$conexion->query($sentencia) or die ("Algo salio mal: ".mysqli_error($conexion));
        $row=$resultado->fetch_assoc();
            //registrarAutor($_POST['nombreAutor'],$_POST['apellidoAutor'],$row["id_inventario"]);
        registrarAutor($row["id_inventario"]);        
    }
    
    function registrarAutor($id){
        include 'config.php';
        global $nombres,$apellidos;
            for($i=0; $i<sizeof($nombres);++$i){
                $sentencia="INSERT INTO autores (nombre,apellido,id_inventario) VALUES('".$nombres[$i]."','".$apellidos[$i]."','".$id."')";
                $conexion->query($sentencia) or die("Error en el alta de la documentación: ". mysqli_error($conexion));
            }
            echo'<script>';
            echo'alert("Se dio de alta de manera exitosa.");';
            echo'window.location.href="index.php"';
            echo'</script>';
    }

?>