<?php

class Neflix{


    public $titulo;
    private $año_creacion;
    protected $alquilada;
    static $fecha_devolucion;
    

    public function __construct($vrtitulo, $vraño_creacion, $vralquilada, $vrfecha_devolucion){

        $this->titulo            = $titulo;
        $this->año_creacion      = $año_creacion;
        $this->alquilada         = $alquilada;
        $this->fecha_devolucion  = $fecha_devolucion; 
    
    }

    public function gettitulo(){
        return $this->strtululo;
    }

    public function getaño_creacion()
    {
        return $this->año_creacion;
    }

    public function getalquilada()
    {
        return $this->intEdad;
    }

    public function setNombre($nombre){
        $this->strNombre = $nombre;




?>
    }