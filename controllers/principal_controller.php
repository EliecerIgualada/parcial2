<?php
require_once("utils/seg.php") ;
require_once("controllers/productos_controller.php");
require_once("controllers/usuario_controller.php");
require_once("models/productos.php") ;
require_once("models/usuario.php") ;
class principal_controller{
    public static function index(){
        if(isset($_COOKIE["usuario"])){
            $_SESSION["usuario"]=$_COOKIE["usuario"];
            $_SESSION["nombre"]=$_COOKIE["nombre"];
        }
        $titulo = "Parcial 2";
        require_once("views/template/header.php"); 
        require_once("views/template/navbar.php");
        require_once("views/principal/index.php");
        require_once("views/usuario/login.php");
        require_once("views/template/footer.php");
    }
}
?>