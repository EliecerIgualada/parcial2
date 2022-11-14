<?php require_once("controllers/productos_controller.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container-sm">
        <div class="row">
        <?php foreach(productos_controller::datos_producto() as $productos){?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-dark mb-3"  style="max-width: 30rem;">
                    <div class="card-body text-primary">
                    <center><h3 class="card-title"><?php echo $productos->getProducto()?></h3></center>
                    <center><img src="<?php echo $productos->getImg()?> " class="img-fluid" alt="..."></center>
                        <p class="card-text"><?php echo $productos->getDescripcion()?></p>
                        <hr>
                        <center><span><?php echo $productos->getPrecio_venta()?></span> <details><span><?php echo $productos->getCantidad_en_existencia()?></span></details></center>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
