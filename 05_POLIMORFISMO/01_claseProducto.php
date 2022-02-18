<?php

class Producto{

public $descripcion;
private $precio;
public $stok;
static $estado;

public function __construct($vrdescripcion, $vrprecio, $vrestado)
{
    $this->descripcion = $vrdescripcion;
    $this->precio = $vrprecio;
    $this->stock = 30;
    Producto ::$estado=  $vrestado;
}

public function getInfoproductos(){
    $arrayProducto = array('descripcion: ' => $this->descripcion,
                            'precio: ' => $this->precio,
                            'stock inventario: ' => $this->stock,
                            'estado: ' => Producto ::$estado,

);
return $arrayProducto;
}
public function getprecio(){
    return $this->precio;
}
public function setprecio($vrprecio){
    $this->precio = $vrprecio;
}


}
?>