<?php 
require_once("controllers/principal_controller.php");
require_once("controllers/productos_controller.php");
require_once("controllers/usuario_controller.php");
require_once("utils/seg.php");
if (count($_GET)==0)
    call_user_func("principal_controller::index");
    else {
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        call_user_func($controlador."_controller::".$metodo);
    }

?>

