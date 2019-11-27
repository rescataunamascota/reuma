<?php
   require_once("../config/errors.php");
   $_REPUESTA = array('mensaje' => 'Sin accion');
   $_json = json_decode(file_get_contents('php://input'), true);

   $_DATOS = array_merge($_POST, $_GET);
   if(is_array($_json) && count($_json)){
      $_DATOS["json"]= $_json;
   }
   $_POST = array();
   $_GET = array();
?>
