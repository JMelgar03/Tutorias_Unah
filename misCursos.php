<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Tutorias</title>
      <link rel="icon" href="img/imgunah/logo.png" sizes="24x24" type="image/svg">

      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> 
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/estrellas.css">

      

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
    
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link href="css/homeTutor.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/HomeEstudiante.css">

  </head>
  
  <body>
        <!-- Navigation -->

    <nav class="navbar fixed-top navbar-expand-lg   fixed-top" id="navbar1">
    <div class="container">

      <a class="navbar-brand" href="HomeEstudiante.php"><img src="img/imgunah/logo.png">UNAH</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" href="homeEstudiante.php"><i class="fas fa-home fa-2x"></i><br>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="misCursos.php"><i class="fas fa-chalkboard fa-2x"></i><br>Mis Cursos</a>
          </li>


      </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-arrow-circle-down fa-2x"></i><br> Descargar
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
          <a class="dropdown-item" href="manualUsuario.pdf"><i class="fas fa-book"></i> Manual de usuario</a>
        </div>
      </li>

      <!--empiezoo-->

        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user fa-2x"></i><br><?php
         echo '<label>'  . $_SESSION["email"] . '</label>'
           ?>

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
        <a class="dropdown-item" href="Perfil.php"><i class="fas fa-user"></i> Mi Perfil</a> 
         <a class="dropdown-item" href="index.php"><i class="fas fa-user-times"></i> Cerar Sesion</a>

          <!--        <a class="dropdown-item" href="portfolio-3-col.html"></a>
                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a> -->
        </div>
      </li>


      <!-- </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                <a class="dropdown-item" href="faq.html">FAQ</a>
                <a class="dropdown-item" href="404.html">404</a>
                <a class="dropdown-item" href="pricing.html">Pricing Table</a> -->
    </div>
    </li>
    </ul>
    </div>
    </div>
  </nav>

  <br>
 <br>
  
  <div >
    <img class="publicidad1" src="./img/publicidad/4.jpg" alt="">
 </div>

        <!-- ....................................INICIO MODAL................................................-->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comunicados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <!-- ..............Noticia y comentarios..................-->
            <div id="div-noticias-E">
                <div class="media">
                  <img src="img/perfil-vacio.jpg" class="mr-3" alt="Smiley face" width="40" height="40">
                  <div class="media-body">
                    <h5 class="mt-0 asunto">Asunto</h5>
                      <label clas="descripcion">
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </label>
                    <div class="media mt-3">
                        <a class="mr-3" href="#">
                          <img src="img/perfil-vacio.jpg" class="mr-3" alt="Smiley face"width="25" height="25">
                        </a>
                        <div class="media-body">
                            <h5 class="mt-0">Nombre Usuario</h5>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
              </div>
                  <textArea class="form-control" placeHolder="Escribe un comentario."></textArea>
                  <input type="button" class="btn" value="Comentar" >
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reportar Tutor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria del reporte</label>
    <select class="form-control" id="exampleFormControlSelect1">
     
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">De una descripcion del caso</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="reportar()">Enviar Reportes</button>
      </div>
    </div>
  </div>
</div>





    <br>
    <br>
    <!-- Page Content -->
    <div class="container">

      <div>
       <label class="label_secciones"> Secciones Matriculadas </label>
      </div>
      <input type="hidden" id="txtIdTutor" value="0">
      <div id="seccionesContainer-estudiante">
        
      </div>
 

 

    </div>




    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/bootstrap/js/popper.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/tilt/tilt.jquery.min.js"></script>
      <script >
        $('.js-tilt').tilt({
          scale: 1.1
        })
      </script>
    <!--===============================================================================================-->
      <script src="js/main.js"></script>
      <script src="js/misCursos.js"></script>
      <script src="js/all.min.js"></script>
      <br>
 <div >
    <img class="publicidad1" src="./img/publicidad/2.jpg" alt="">
 </div>
 <br>
    </body>
  </html>