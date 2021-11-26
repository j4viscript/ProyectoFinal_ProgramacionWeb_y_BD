<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/api/v1/controllers/User.php");
  $user = new User();
  $response = $user->logout();
  $user->response($response);