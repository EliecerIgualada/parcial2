<?php
class productos{
    private $id;
    private $producto;
    private $descripcion;
    private $costo_compra;
    private $precio_venta;
    private $cantidad_en_existencia;
    private $img;

    public function __construct($id,$producto,$descripcion,$costo_compra,$precio_venta,$cantidad_en_existencia,$img){
        $this->id= $id;
        $this->producto= $producto;
        $this->descripcion= $descripcion;
        $this->costo_compra= $costo_compra;
        $this->precio_venta= $precio_venta;
        $this->cantidad_en_existencia= $cantidad_en_existencia;
        $this->img= $img;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setProducto($producto){
        $this->producto=$producto;
    }
    public function getProducto(){
        return $this->producto;
    }

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setCosto_compra($costo_compra){
        $this->costo_compra=$costo_compra;
    }
    public function getCosto_compra(){
        return $this->costo_compra;
    }

    public function setPrecio_venta($precio_venta){
        $this->precio_venta=$precio_venta;
    }
    public function getPrecio_venta(){
        return $this->precio_venta;
    }

    public function setCantidad_en_existencia($cantidad_en_existencia){
        $this->cantidad_en_existencia=$cantidad_en_existencia;
    }
    public function getCantidad_en_existencia(){
        return $this->cantidad_en_existencia;
    }

    public function setImg($img){
        $this->img=$img;
    }
    public function getImg(){
        return $this->img;
    }


    public function getProductos(){
        $producto[] = [
            "id"=>1,
            "producto"=>"Cuadernos",
            "descripcion"=>"Un cuaderno es un conjunto de hojas de papel, impresas o en blanco, unidas con una espiral o dobladas, encajadas o cosidas​, que forman un libro delgado.",
            "costo_compra"=>"2.00 $",
            "precio_venta"=>"5.00 $",
            "cantidad_en_existencia"=>"10px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>2,
            "producto"=>"Borradores",
            "descripcion"=>"Utensilio que sirve para borrar lo escrito en un pizarrón.",
            "costo_compra"=>"1.00 $",
            "precio_venta"=>"1.75 $",
            "cantidad_en_existencia"=>"40px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>3,
            "producto"=>"Sacapuntas",
            "descripcion"=>"Un sacapuntas es el instrumento que se utiliza para afinar la madera y la punta de grafito de un lápiz cuando se ha engrosado",
            "costo_compra"=>"0.50 $",
            "precio_venta"=>"1.25 $",
            "cantidad_en_existencia"=>"40px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>4,
            "producto"=>"Bolígrafos",
            "descripcion"=>"Instrumento para escribir que tiene en su interior un tubo de tinta especial y , en la punta , una bolita metálica que gira libremente .",
            "costo_compra"=>"1.00 $",
            "precio_venta"=>"2.00 $",
            "cantidad_en_existencia"=>"35px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>5,
            "producto"=>"Mochila",
            "descripcion"=>"Bolsa de lona o de otro material resistente que , provista de correas para ser cargada a la espalda , sirve para llevar provisiones o equipos en excursiones , expediciones , viajes , etc.",
            "costo_compra"=>"2.00 $",
            "precio_venta"=>"5.00 $",
            "cantidad_en_existencia"=>"10px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>6,
            "producto"=>"Reloj",
            "descripcion"=>"Instrumento capaz de medir, mantener e indicar el tiempo en unidades convencionales (horas, minutos o segundos).",
            "costo_compra"=>"20.00 $",
            "precio_venta"=>"35.00 $",
            "cantidad_en_existencia"=>"10px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>7,
            "producto"=>"libretas",
            "descripcion"=>"Cuaderno o libro pequeño destinado a escribir en él anotaciones o cuentas.",
            "costo_compra"=>"2.00 $",
            "precio_venta"=>"3.25 $",
            "cantidad_en_existencia"=>"15px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>8,
            "producto"=>"calculadora",
            "descripcion"=>"Máquina electrónica capaz de efectuar cálculos aritméticos.",
            "costo_compra"=>"3.00 $",
            "precio_venta"=>"5.50 $",
            "cantidad_en_existencia"=>"20px en inventario",
            "img"=>""];
        $producto[] = [
            "id"=>9,
            "producto"=>"corrector",
            "descripcion"=>"fluido blanco y opaco, a manera de tinta, que se aplica en el papel para tapar errores en el texto.",
            "costo_compra"=>"1.00 $",
            "precio_venta"=>"2.00 $",
            "cantidad_en_existencia"=>"35px en inventario",
            "img"=>""];
                foreach($producto as $p){
                    if($this->id == $p["id"]){
                        return $p;
                    }
                }
                return[];
    }
}
?>