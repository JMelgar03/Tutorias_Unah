<?php

 session_start();
 
 $_SESSION['idDepto']= $_GET['dep'];

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
      <link rel="stylesheet" type="text/css" href="css/clases.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> 
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link hrel="stylesheet" type="text/css" href="css/fontawesome-free/all.min.css">

      <link rel="stylesheet" type="text/css" href="css/HomeEstudiante.css">

      <script src="js/misFunciones.js"></script>

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
  <br>
 <div >
    <img class="publicidad1" src="./img/publicidad/6.jpg" alt="">
 </div>



  <!-- INICIO MODAL 1----------->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div  style="width: 800px" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Secciones Disponibles:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body">
          <div class="form-group">
          <select id="slc-secciones" class="form-control">
                <option class="form-control" value="">Seleccione Una Seccion a Matricular</option>
                <option class="form-control" value="" id="materia" name="materia"></option>
                </select>
                <label class="lbl-matricula" id="lbl-matricula">Seccion Ya Matriculada.</label>
                <br>
                <button class="btn btn-primary mt-2" id="btn-matricular">Matricular</button>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL 1----------->


<!-- INICIO MODAL 2----------->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Solicitud:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">

          <div class="col-6">
              <div class="form-group row">
                <label for="example-tel-input" class="col-4 col-form-label"><p style="color: black;">Hora Inicial</p></label>
                <div class="col-8">
                    <select id="slc-horaInicial2" class="form-control">
                    <option class="form-control" >Hora Inicial</option>
                        <option class="form-control" value="070000" name="inicio">7:00AM</option>
                        <option class="form-control" value="080000" name="inicio">8:00AM</option>
                        <option class="form-control" value="090000" name="inicio">9:00AM</option>
                        <option class="form-control" value="100000" name="inicio">10:00AM</option>
                        <option class="form-control" value="110000" name="inicio">11:00AM</option>
                        <option class="form-control" value="120000" name="inicio">12:00PM</option>
                        <option class="form-control" value="130000" name="inicio">1:00PM</option>
                        <option class="form-control" value="140000" name="inicio">2:00PM</option>
                        <option class="form-control" value="150000" name="inicio">3:00PM</option>
                        <option class="form-control" value="160000" name="inicio">4:00PM</option>
                    </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group row">
                <label for="example-tel-input" class="col-4 col-form-label" ><p style="color: black;">Hora Final</p></label>
                <div class="col-8">
                    <select id="slc-horaFinal2" class="form-control">
                    <option class="form-control"style="color: black;" >Hora Final</option>
                        <option class="form-control" value="080000" name="final">8:00AM</option>
                        <option class="form-control" value="090000" name="final">9:00AM</option>
                        <option class="form-control" value="100000" name="final">10:00AM</option>
                        <option class="form-control" value="110000" name="final">11:00AM</option>
                        <option class="form-control" value="120000" name="final">12:00PM</option>
                        <option class="form-control" value="130000" name="final">1:00PM</option>
                        <option class="form-control" value="140000" name="final">2:00PM</option>
                        <option class="form-control" value="150000" name="final">3:00PM</option>
                        <option class="form-control" value="160000" name="final">4:00PM</option>
                        <option class="form-control" value="170000" name="final">5:00PM</option>
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-12" style="color: black;"><p style="color: black;">Dias Impartidos</p></div>
            <div class="col-2"><input type="checkbox" name="week2[]" value="Lu"> Lunes</div>
            <div class="col-2"><input type="checkbox" name="week2[]" value="Ma"> Martes</div>
            <div class="col-2"><input type="checkbox" name="week2[]" value="Mi"> Miercoles</div>
            <div class="col-2"><input type="checkbox" name="week2[]" value="Ju"> Jueves</div>
            <div class="col-2"><input type="checkbox" name="week2[]" value="Vi"> Viernes</div>
            <div class="col-2"><input type="checkbox" name="week2[]" value="Sa"> Sabado</div>

          </div>


                <br>
                <div id="div-contenedorBoton">

                </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL 2----------->


    <div class="container" >
        <div class="row" id="div-contenedor-2">

        </div>   
    </div>
    <br>
  <br>
 <div >
    <img class="publicidad1" src="./img/publicidad/7.jpg" alt="">
 </div>
 <br>
 <br>



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
      <script src="js/jmfunciones.js"></script>
      <script src="js/clases.js"></script>
      <script src="js/all.min.js"></script>
    </body>
    </html>
    