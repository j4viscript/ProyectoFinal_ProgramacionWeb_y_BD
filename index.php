<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."//Proyecto_final/api/v1/controllers/User.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."//Proyecto_Final/components/template/head.php");
  ?>
</head>
<body id="javier-murillo">
  <div id="container">
    <section id="img-left">
        <img src="" alt="">
      </section>
    <div id="start">
      <div id="container-start"></div>
      <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."//Proyecto_Final/components/template/header.php");
        include_once($_SERVER["DOCUMENT_ROOT"]."//Proyecto_Final/components/login.php");
      ?>
    </div>
    <footer id="footer">
      <?php         
        include_once($_SERVER["DOCUMENT_ROOT"]."//Proyecto_Final/components/template/footer.php");
      ?>
    </footer>
  </div>
</body>
</html>