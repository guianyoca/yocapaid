<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'template/header.php';

if ($_SESSION['escritorio']==1)
{




?>
<br>
<br>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">     
      <br>   
     <center><img src="./images/logo.jpg" alt=""><br>
            <h2>Plataforma de gestión de pagos</h2>
    </center>
    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}

require 'template/footer.php';
?>

<?php 
}
ob_end_flush();
?>

