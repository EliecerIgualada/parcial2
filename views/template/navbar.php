
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("inicio")?>">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("mostrar")?>">Tabla</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Agregar 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Agregar Usuario</a></li>
                        <li><a class="dropdown-item" href="#">Agregar artículo</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo isset($_SESSION["usuario"])?$_SESSION["usuario"]:""?></a>
                </li>
            </ul>
            <?php if(isset($_SESSION["usuario"])){?>

<form action="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("mostrar")?>" method="post" class="d-flex">
                <h3><label for="text" style="color:#FFFFFF">Artículo </label></h3>.
                <input class="form-control me-2" type="search" placeholder="Escriba el artículo" aria-label="Search" name="id" required>
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
                <button class="btn btn-outline-light" type="submit">Buscar</button>  
</form>

            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion")?>">Cerrar Sesión</a>
                </li>
            </ul>
            <?php }else{?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")?>" tabindex="-1">Login</a>
                </li>
            </ul>
            <?php }?>
        </div>
    </div>
</nav>