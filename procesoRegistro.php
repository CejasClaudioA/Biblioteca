<?php
    registrarPersonal($_POST['nombreCompleto'],$_POST['dni'],$_POST['usuario'],$_POST['contrasenia'],$_POST['email'],$_POST['genero']);

    function registrarPersonal($nombreCompleto,$dni,$usuario,$contrasenia,$email,$genero){
        include 'config.php';
        $sentencia="INSERT INTO bibliotecarios (nombreCompleto,dni,usuario,contrasenia,email,genero) VALUES('".$nombreCompleto."','".$dni."','".$usuario."','".$contrasenia."','".$email."','".$genero."')";
        $conexion->query($sentencia) or die("Error en el registro: ". mysqli_error($conexion));
       
        
            echo'<script>';
            echo'alert("El usuario se creo de manera exitosa.");';
            echo'window.location.href="index.php"';
            echo'</script>';
        
    }
?>
