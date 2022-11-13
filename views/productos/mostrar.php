<?php
?>
<div class="container-sm">
    <div class="row">
    <center><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
        <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
                <tr>
                    <th>Id del Producto</th>
                    <td><?php echo $res["id_producto"] ?></td>
                    
                </tr>           
                <tr>
                    <th>Descripción</th>
                    <td><?php echo $res["descripcion"] ?></td>
                    
                </tr> 
                <tr>
                    <th>Costo de Compra</th>
                    <td><?php echo $res["costo_compra"] ?></td>
                    
                </tr>
                <tr>
                    <th>Precio de Venta</th>
                    <td><?php echo $res["precio_venta"] ?></td>
                    
                </tr> 
                <tr>
                    <th>Cantidad en Existencia</th>
                    <td><?php echo $res["cantidad_en_existencia"] ?></td>
                    
                </tr>
        </table>
    </div>
</div>