<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/api/v1/controllers/User.php");
  $userController = new User(false);
  if(!$userController->isLoggedIn()) {
    header("Location: /");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/components/template/head.php");
  ?>
</head>
<body>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/components/template/header.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/components/userProfile.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/components/logout.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/components/template/footer.php");
  ?>
</body>
</html>