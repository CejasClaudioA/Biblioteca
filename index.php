<?php
session_start();
$usuario= $_SESSION['sesion'];
$pass= $_SESSION['a'];
echo 'usuario: '.$usuario;
echo '<br>';
echo 'contraseña: '.$pass;
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <meta charset="UTF-8">
        <title>Inicio</title>
    </head>
    <body>
        
        
        <nav class="navbar navbar-expand-lg navbar-light bg-faded barras col-12">
            <div class="row col">
            <a class="navbar-brand" href="#" style="color:#fff">Inicio</a>
            </div>
                <div class="row col">
                    
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a href="#"><i class="fas fa-archive fa-2x navegacionPrincipal"title="Informes"></i></a>
                    </li>
                
                    <li class="nav-item principal">
                        <a href="listaDeMaterial.php"><i class="fas fa-book fa-2x navegacionPrincipal" title="Lista de libros"></i></a>
                    <li class="nav-item">
                        <a href="formularioDocumentacion.php"><i class="fas fa-book-medical fa-2x navegacionPrincipal" title="Alta de documentación"></i></a>
                 </li>
                <li class="nav-item">
                 <a href="formularioUsuario.php"><i class="fas fa-user-plus fa-2x navegacionPrincipal"title="Agregar usuario"></i></a>
                </li>
                <li class="nav-item">
                    <a href="usuarios.php"><i class="fas fa-user-minus fa-2x navegacionPrincipal" title="Borrar usuario"></i></a>
                </li>
                
                <li class="nav-item">
                    <a href="#"><i class="far fa-id-card fa-2x navegacionPrincipal"title="Modificar Datos Usuario"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#"><i class="fas fa-people-carry fa-2x navegacionPrincipal"title="Prestamo"></i></a>
                </li>
                <li class="nav-item">
                    <a href="devolucion.php"><i class="fas fa-reply fa-2x navegacionPrincipal"title="Devolución"></i></a>
                </li>
                
                
                </ul>
    </div>
    <form class="form-inline my-2 my-lg-0 row">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
            <a href="#" onclick="mostrarOcultar('opciones');return false"/><i class="fas fa-user fa-2x navegacionPrincipal" style="float:right; margin-left: 50px"></i> </a>
</nav>
        
        <div id="opciones" style="visibility:hidden;position:absolute;right:0">
                <ul id="itemList" class="mr-auto">
                <li class="nav-item"><a href=""> Cuenta</a> </li>
                <li class="nav-item"><a href=""> Salir</a> </li>
                </ul>
        </div>
        
        
        
<!--    <nav class="navbar navbar-toggleable-md navbar-light bg-faded barras">
      <div class="col ">
          <a class="navbar-brand" href="index.php" style="color:#fff">Inicio</a>
            <ul class="nav justify-content-center">
                <li class="nav-item principal">
                 <a href="#"><i class="fas fa-book fa-2x navegacionPrincipal" title="Lista de libros"></i></a>
                </li>
                <li class="nav-item">
                 <a href="formulario.php"><i class="fas fa-book-medical fa-2x navegacionPrincipal" title="Agregar Libro"></i></a>
                 </li>
                <li class="nav-item">
                 <a href="formulario.php"><i class="fas fa-user-plus fa-2x navegacionPrincipal"title="agregar usuario"></i></a>
                </li>
                <li class="nav-item">
                 <a href="#"><i class="fas fa-user-minus fa-2x navegacionPrincipal" title="borrar usuario"></i></a>
                </li>
            </ul>
          <i class="fas fa-cogs fa-2x" style="float:right; margin-left: 15px"></i>
          <i class="fas fa-user fa-2x" style="float:right"></i>
          <i class="fas fa-bars fa-2x btn-toolbar"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"style="float:left; margin-right: 50px;"></i>
          
    </div>

  <div class="col collapse-xs navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
      </div>
  </div>
</nav>-->
                
<!--        <div class="collapse" id="collapseExample" style="margin:20px; color:black;">-->
<!--        <div class="card card-body" style="background:#CBCBCB">
            <navbar>
                <ul class="nav justify-content-center">
                    <li class="nav-item principal">
                 <a href="#"><i class="fas fa-book fa-2x navegacionPrincipal" title="Lista de libros"></i></a>
             </li>
             <li class="nav-item">
                 <a href="formulario.php"><i class="fas fa-book-medical fa-2x navegacionPrincipal" title="Agregar Libro"></i></a>
             </li>
             <li class="nav-item">
                 <a href="formulario.php"><i class="fas fa-user-plus fa-2x navegacionPrincipal"title="agregar usuario"></i></a>
             </li>
             <li class="nav-item">
                 <a href="#"><i class="fas fa-user-minus fa-2x navegacionPrincipal" title="borrar usuario"></i></a>
             </li>
         </ul>
                </navbar>

        
        
</div>-->
            
            
            
<!--        </div>-->
        </div>  
        

        <div class="container main-content" style="margin-top: 10px">
    


        <div id="publicaciones" style="color:#000">

            <center><h3> Prestamos realizados en el dia de hoy:</h3></center>
            
            <div class="list-group" id="lista">
                <?php
                include 'config.php';
                $sql = "select * from prestamos";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start"> <?php echo $mostrar['id_socio'] ?></a>



                    <?php
                }
                mysqli_close($conexion);
                ?>



            </div>
            
<!--            <div class="list-group">
                
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">Prestamo realizado:</a>
            </div>-->
    </div>

  </div>


        

        
    <footer>
        <h4>Información de contacto:</h4>
        <br>
        <b>Florencia Silva</b>
        <a href="mailto:FlorSilva1993@gmail.com?subject=Solicitud%20de%20servicio."><i class="far fa-envelope fa-2x"title="Enviar Mensaje" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
        <a href="https://api.whatsapp.com/send?phone=59898231403"><i class="fab fa-whatsapp fa-2x" style="margin-left:5px" aria-hidden="true" ></i></a>
        <a href="#facebook"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#twitter"><i class="fab fa-twitter fa-2x"></i></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Claudio Cejas</b>
        <a href="mailto:CejasClaudioAlejandro@gmail.com?subject=Solicitud%20de%20servicio."><i class="far fa-envelope fa-2x"title="Enviar Mensaje" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
        <a href="https://api.whatsapp.com/send?phone=5493772406584"><i class="fab fa-whatsapp fa-2x" style="margin-left:5px" aria-hidden="true" ></i></a>             
        <a href="#facebook"><i class="fab fa-facebook fa-2x"></i></a>          
        <a href="#twitter"><i class="fab fa-twitter fa-2x"></i></a>
    </footer>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    </body>
</html>
