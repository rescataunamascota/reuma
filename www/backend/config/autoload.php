<?php
   spl_autoload_register(function($nombreClase){
      $archivo= dirname(__DIR__) . "/clases/{$nombreClase}.php";
      if(file_exists($archivo)){
         require_once($archivo);
      }
   });
?>