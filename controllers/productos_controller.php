<?php 
require_once("models/productos.php");
require_once("utils/seg.php");
class productos_controller{
   public static function inicio(){
      $titulo = "Tabla de Artículos";
        require_once("views/template/header.php"); 
        require_once("views/template/navbar.php");
        require_once("views/principal/index.php");
        require_once("views/productos/inicio.php");
        require_once("views/template/footer.php");
   } 


   public static function mostrar(){
      $titulo = "Tabla de Artículos";
      require_once("views/template/header.php"); 
      require_once("views/template/navbar.php");
      require_once("views/principal/index.php");
      require_once("views/productos/mostrar.php");
      require_once("views/template/footer.php");

      if($_POST){
         if(!isset($_POST["token"]) || !seg::validaSession($_POST["token"])){
            echo "Acceso restringido";
            exit();
         }
         $buscar=filter_var($_POST["txtBuscar"], FILTER_SANITIZE_SPECIAL_CHARS);
         $obj = new productos($id_producto,"","","");
            $resultado = $obj->getProducto();
            $titulo = "Descripción de los artículos";
      require_once("views/template/header.php"); 
      require_once("views/template/navbar.php");
      require_once("views/principal/index.php");
      require_once("views/productos/mostrar.php");
      require_once("views/template/footer.php");
      }
   } 
}
?>
