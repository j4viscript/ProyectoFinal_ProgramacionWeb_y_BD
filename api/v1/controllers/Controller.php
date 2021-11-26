<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/Proyecto_Final/api/v1/database/DataBase.php");
class Controller {
  public $code = 200;
  public $db;
  function __construct($jsonResponse = true){
    if($jsonResponse) header('Content-Type: application/json');
    session_start();
    $this->db = new DataBase();
  }
  function response($response) {
    http_response_code($this->code);
    echo json_encode($response);
  }
}