<?php

   require_once("01_claseProducto.php");

   class Mueble extends producto {

   public $color;
   public $Material;

   public function __construct($vrdescripcion, $vrprecio, $vrestado, $vrcolor, $vrmaterial)
    {
        parent::__construct($vrdescripcion, $vrprecio, $vrestado);
    
       $this->color = $vrcolor;
       $this->material = $vrmaterial;
    }



   }

?>