<?php
class productos{
    private $id_producto;
    private $descripcion;
    private $costo_compra;
    private $precio_venta;
    private $cantidad_en_existencia;

    public function __construct($id_producto,$descripcion,$costo_compra,$precio_venta,$cantidad_en_existencia){
        $this->id_producto= $id_producto;
        $this->descripcion= $descripcion;
        $this->costo_compra= $costo_compra;
        $this->precio_venta= $precio_venta;
        $this->cantidad_en_existencia= $cantidad_en_existencia;
    }

    public function getProducto(){
        $producto[] = 
        ["id_producto"=>"Cuadernos",
        "descripcion"=>"Un cuaderno es un conjunto de hojas de papel, impresas o en blanco, unidas con una espiral o dobladas, encajadas o cosidas​, que forman un libro delgado.",
        "costo_compra"=>"2.00 $",
        "precio_venta"=>"5.00 $ ",
        "cantidad_en_existencia"=>"10"];
        $producto[] = 
        ["id_producto"=>"Lapices",
        "descripcion"=>"Un lápiz de color es un material de arte formado por una mina pigmentada, encerrada dentro de una funda cilíndrica de madera.",
        "costo_compra"=>"4.00 $",
        "precio_venta"=>"6.50 $ ",
        "cantidad_en_existencia"=>"12 pax"];

        $producto[] = 
        ["id_producto"=>"Borradores",
        "descripcion"=>"Utensilio que sirve para borrar lo escrito en un pizarrón.",
        "costo_compra"=>"1.00 $",
        "precio_venta"=>"2.50 $ ",
        "cantidad_en_existencia"=>"20 pax"];
        $producto[] = 
        ["id_producto"=>"sacapuntas",
        "descripcion"=>"Un sacapuntas es el instrumento que se utiliza para afinar la madera y la punta de grafito de un lápiz cuando se ha engrosado",
        "costo_compra"=>"0.50 $",
        "precio_venta"=>"2.00 $ ",
        "cantidad_en_existencia"=>"23 pax"];

        $producto[] = 
        ["id_producto"=>"Boligarfos",
        "descripcion"=>"Instrumento para escribir que tiene en su interior un tubo de tinta especial y , en la punta , una bolita metálica que gira libremente .",
        "costo_compra"=>"2.00 $",
        "precio_venta"=>"5.00 $ ",
        "cantidad_en_existencia"=>"30 pax"];
        $producto[] = 
        ["id_producto"=>"Mochila",
        "descripcion"=>"Bolsa de lona o de otro material resistente que , provista de correas para ser cargada a la espalda , sirve para llevar provisiones o equipos en excursiones , expediciones , viajes , etc.",
        "costo_compra"=>"10.00 $",
        "precio_venta"=>"15.50 $ ",
        "cantidad_en_existencia"=>"10 pax"];

        foreach($producto as $p){
            if($this->id_producto==$p["id_producto"]){
                return $p;
            }
        }
        return [];
    }
}
?>