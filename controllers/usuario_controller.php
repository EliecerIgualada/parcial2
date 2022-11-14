<?php
if(session_status()==1)session_start();
require_once("models/usuario.php");
class usuario_controller{
    public static function login(){
        $msg = isset($_GET["msg"])?$_GET["msg"]:"";

        $titulo = "Login de Usuario";
        require_once("views/template/header.php"); 
        require_once("views/template/navbar.php");
        require_once("views/principal/index.php");
        require_once("views/usuario/login.php");
        require_once("views/template/footer.php");
    }
    public static function validar(){
        if($_POST){
            if(!isset($_POST["token"]) || !seg::validaSession($_POST["token"])){
                echo "Acceso restringido";
                exit();
             }
                empty($_POST["txtUsuario"])?$error[0]="Introduzca su usuario":$usuario=$_POST["txtUsuario"];
                empty($_POST["txtPassword"])?$error[1]="Introduzca la contraseña":$contraseña=$_POST["txtPassword"];
                if(isset($error)){
                    $titulo = "Login de Usuario";
                    require_once("views/template/header.php"); 
                    require_once("views/template/navbar.php");
                    require_once("views/principal/index.php");
                    require_once("controllers/productos_controller.php");
                    require_once("views/template/footer.php");
                }

                $usuario=filter_var($_POST["txtUsuario"], FILTER_SANITIZE_SPECIAL_CHARS);
                $contraseña=filter_var($_POST["txtPassword"], FILTER_SANITIZE_SPECIAL_CHARS);

            $obj = new usuario($_POST["txtUsuario"], $_POST["txtPassword"],"","");
            $resultado = $obj->valida_usuario();
            if(count($resultado)>0){
                $_SESSION["usuario"] = $resultado["usuario"];
                $_SESSION["nombre"] = $resultado["nombre"];
                if(isset($_POST["chkRecordar"])){
                    setcookie("usuario",$resultado["usuario"], time()+60);
                    setcookie("nombre",$resultado["nombre"], time()+60);
                }
                header("location:index.php?c=".seg::codificar("productos")."&m=".seg::codificar("inicio"));
            }else{
            header("location:index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")."&msg=Usuario o Password INCORRECTO!!");
            }
        } 
    }
    public static function cerrar_sesion(){
        if(session_status()==1)session_start();
        session_destroy();
        header("location:index.php");
    }
}
?>