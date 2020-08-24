<?php
    
    /**
     * Se hace la llamada al metodo consultar usuario y se le envian 2 parametros.
     */
    consultarUsuario($_POST['txtUsuario'],$_POST['txtPassword']);

    /**
     * Funcion php que revisa la base de datos para verificar si el usuario
     * y contraseña pertenecen al sistema, si pertenece ingresa al sistema,
     * de modo contrario lo deja en el login.
     * @param type $usuario
     * @param type $password
     */
    function consultarUsuario($usuario,$password){
        include 'config.php';
        $sentencia="Select * FROM bibliotecarios WHERE usuario='".$usuario."' AND contrasenia='".$password."'";
        $resultado=$conexion->query($sentencia) or die("Error en la consulta a la bdd: ". mysqli_error($conexion));        
        $count= mysqli_num_rows($resultado);    
        if($count>0){
            $row=$resultado->fetch_assoc();
            session_start();
            $_SESSION['sesion']=$row["usuario"];
            $_SESSION['a']=$row["contrasenia"];
            echo'<script>';
            echo'window.location.href="index.php"';
            echo'</script>';
        }else{
            echo'<script>'; 
            echo'alert("Usuario/Contraseña incorrecta.");';
            echo'window.location.href="Ingreso.php";';
            echo "document.getElementById('error').style.display='block';";
            echo'</script>';
        }
    }
?>

