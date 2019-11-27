<?php
require_once("Conexion.php");
class DB extends Conexion {
   
   function __construct(){
   }

   /**
   * Ejecuta una instruccion CRUD
   *
   * @access private
   * @param PDOStatement $stm paso por referencia de las sentencia preparada
   * @param string $sql instruccion a ejecutar
   * @param array $bind arreglo asociativo con los campos a interpolar para la sentencia preparada
   * @return void
   */
   private static function ejecutarCRUD(&$stm, $sql, $bind=null){
      parent::conectar();
      $stm =  parent::getConexion()->prepare($sql);
      $error = null;
      try {
         if(is_null($bind)){
            $stm->execute(array());
         }else{
            $stm->execute($bind);
         }
      } catch (Exception $e) {
         http_response_code(500);
         parent::desconectar($stm);
         throw $e;
      }
   }

   /**
    * Ejecuta una instruccion SELECT
    * Retorna un arreglo con las filas devuelta por la consulta
    * @access public
    * @param string $sql instruccion select a ejecutar
    * @param array $bind arreglo asociativo con los campos a interpolar para la sentencia preparada
    * @return array
    */
   public static function ejecutarSelect($sql, $bind=null){
      $stm=null;
      $datos=null;
      self::ejecutarCRUD($stm, $sql, $bind);
      if($stm){
         try{
            $datos = ($stm->rowCount() > 0) ? $stm->fetchAll(PDO::FETCH_ASSOC) : null;
         } catch (Exception $e) {
            parent::desconectar($stm);
         } finally {
            parent::desconectar($stm);
         }
      }
      return $datos;
      
   }

   /**
    * Ejecuta una instruccion Insert, Update o Delete
    *Retorna true o false si se afectaron o no registros
    * @access public
    * @param string $sql instruccion a ejecutar
    * @param array $bind arreglo asociativo con los campos a interpolar para la sentencia preparada
    * @return boolean
    */
   public static function ejecutarIUD($sql, $bind=null){
      $stm = null;
      $hayFilasAfectadas=false;
      self::ejecutarCRUD($stm, $sql, $bind);
      if ($stm) {
         try{
            $hayFilasAfectadas = ($stm->rowCount() > 0);
         } catch (Exception $e) {
            parent::desconectar($stm);
         } finally {
            parent::desconectar($stm);
         }
      }
      return $hayFilasAfectadas;
   }
   
}
