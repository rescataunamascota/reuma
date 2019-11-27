<?php
require_once("../config/config.php");
abstract class Conexion {

   private static $conexionDB;
   
   function __construct(){
   }
   protected function conectar(){
      try {
         if(is_null(self::$conexionDB)){
            $strCon = "mysql:host=" . constant("DB_HOST") . ";";
            $strCon .= "dbname=" . constant("DB_NOMBRE");
            self::$conexionDB = new PDO(  $strCon , constant("DB_USUARIO") ,constant("DB_CONTRASENA") );
            self::$conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexionDB->exec("SET CHARACTER SET utf8");
         }
      } catch (Exception $e) {
         http_response_code(500);
         die("Error es: " . $e->GetMessage());
      }
   }
   protected function getConexion(){
      return self::$conexionDB;
   }

   protected function desconectar(&$statement=null){
      if(!is_null(self::$conexionDB)){
         if(!is_null($statement)){
            $statement->closeCursor();
            $statement=null;
         }
         self::$conexionDB=null;
      }
   }
   
}
?>