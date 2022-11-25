<div class="container-sm">
    <div class="row">
        <center><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
            <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <tr>
                        <th>Id</th>
                        <td><?php echo $resultado["id"] ?></td>
                        
                    </tr>
                    <tr>
                        <th>Producto</th>
                        <td><?php echo $resultado["producto"] ?></td>
                        
                    </tr>           
                    <tr>
                        <th>Descripción</th>
                        <td><?php echo $resultado["descripcion"] ?></td>
                        
                    </tr> 
                    <tr>
                        <th>Costo de Compra</th>
                        <td><?php echo $resultado["costo_compra"] ?></td>
                        
                    </tr>
                    <tr>
                        <th>Precio de Venta</th>
                        <td><?php echo $resultado["precio_venta"] ?></td>
                        
                    </tr> 
                    <tr>
                        <th>Cantidad en Existencia</th>
                        <td><?php echo $resultado["cantidad_en_existencia"] ?></td>
                        
                    </tr>
            </table>
        </div></center>
    </div>
</div>