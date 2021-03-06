<?php

 session_start();
 
?>
 <?php 

  include ('../class/class-conexion.php');
   $conexion  = new Conexion();
   switch ($_GET["accion"]) {
   	case 'crear-usuario':
   		include ('../class/class-usuario.php');
         $contrasena = sha1($_POST["txt-password"]);

         $usuario = new Usuario(null,
                                $_POST["txt-nombre-completo"],
                              $_POST["txt-nombre-completo"],
                              $contrasena,
                              $_POST["txt-correo"],
                              null,
                              $_POST["txt-fecha"],
                              null,
                              null,
                              null,
                              null,
                              $_POST["rbt-genero"],
                              null
                           );
         $usuario->guardarUsuario($conexion);
   		break;
   

   case 'login':
   		include ('../class/class-usuario1.php');
         $contrasena = sha1($_POST["txt-password"]);
         //Usuario::consultar($conexion,$_POST["txt-cuenta"],$_POST["txt-password"]);

   		Usuario::verificarUsuario($conexion,$_POST["txt-correo"],$contrasena);
         break;
         

   case'verificar_correo':
      include ('../class/class-usuario1.php');
      Usuario::verificarCorreo($conexion,$_POST["txt-correo"]);
      break;

      case'obtenerTutores':
         include ('../class/class-usuario1.php');
         Usuario::obtenerTutores($conexion);
         break;


         case'obtenerTutoresR':
         include ('../class/class-usuario1.php');
         Usuario::obtenerTutoresR($conexion);
         break;

         case'obtenerReportes':
         include ('../class/class-usuario1.php');
         Usuario::obtenerReportes($conexion,$_GET['idTutor']);
         break;

         case'evaluar':
         include ('../class/class-usuario1.php');
         Usuario::evaluarTutor($conexion,$_POST['idTutor'],$_POST['evaluacion']);
         break;

         case'desactivarTutor':
         include ('../class/class-usuario1.php');
         Usuario::desactivarTutor($conexion,$_POST['idAlumno'],$_POST['correo']);
         break;

         case'activarTutor':
         include ('../class/class-usuario1.php');
         Usuario::activarTutor($conexion,$_POST['idAlumno']);
         break;

   case 'verificar_respuesta':
      include ('../class/class-usuario1.php');
      Usuario::verificarRespuesta($conexion,$_POST['txt-correo'],$_POST['txt-respuesta2']);
      break;

      case 'reportar':
      include ('../class/class-usuario1.php');
      Usuario::reportarTutor($conexion,$_POST['idTutor'],$_POST['slc-id-categoria'],$_POST['txt-descripcion']);
      break;
   	default:
   		# code...
   		break;
   }
   $conexion->cerrarConexion();
?>