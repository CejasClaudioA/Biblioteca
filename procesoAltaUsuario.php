<?php

$provincias=$_POST['provincia'];
$localidades=$_POST['localidad'];;
$direcciones=$_POST['direccion'];;
//            for($i=0; $i<sizeof($provincias);++$i){
//                echo "<br>".$provincias[$i]." ".$localidades[$i]." ".$direcciones[$i];
//            }

    AltaUsuario($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['tipoDocumento'],$_POST['nro'],$_POST['celular'],$_POST['radio']);
    
    function AltaUsuario($nombre,$apellido,$email,$tipoDoc,$nro,$celular,$tipoSocio){
        include 'config.php';
        $sentencia="INSERT INTO socios (nombre,apellido,email,tipo_documento,documento,telefono,tipo_socio) VALUES('".$nombre."','".$apellido."','".$email."','".$tipoDoc."','".$nro."','".$celular."','".$tipoSocio."')";
        $conexion->query($sentencia) or die("Error en el alta del usuario: ". mysqli_error($conexion));
    
        $sentencia="SELECT documento FROM socios WHERE documento= '".$nro."'";
        $resultado=$conexion->query($sentencia) or die ("Algo salio mal: ".mysqli_error($conexion));
        $row=$resultado->fetch_assoc();
        AltaDomicilio($row["documento"]);
    }
    
    function AltaDomicilio($documento){
        include 'config.php';
        global $provincias,$localidades,$direcciones;
            for($i=0; $i<sizeof($provincias);++$i){
                $sentencia="INSERT INTO domicilios (documento,provincia,localidad, domicilio) VALUES('".$documento."','".$provincias[$i]."','".$localidades[$i]."','".$direcciones[$i]."')";
                $conexion->query($sentencia) or die ("No se pudo dar de alta el domicilio: ". mysqli_error($conexion));        
            }
        
        
            echo'<script>';
            echo'alert("Se dio de alta de manera exitosa.");';
            echo'window.location.href="index.php"';
            echo'</script>';
    }

?>