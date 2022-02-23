<?php

    class Empleado{
    
            public $nombre;
            private $celular;
            public $cargo;
            public $sueldo;
            static $auxilio_transporte;


            public function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vrauxilio_transporte)
            {
                $this->nombre = $vrnombre;
                $this->celular = $vrcelular;
                $this->cargo = $vrcargo;
                $this->sueldo = $vrsueldo;
                $this->auxilio_transporte = $vrauxilio_transporte;
            }
        
            public function getEmpleado()
            {
                $arrayEmpleado = array(
                    'cargo:' => $this->cargo,
                    'sueldo:' => $this->sueldo,
                    
                );
                return $arrayEmpleado;
            }
        
            public function getNombre(){
                return $this->nombre;
            }
           
            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            public function getcelular(){
                return $this->celular;
            }
           
            public function setcelular($celular){
                $this->celular = $celular;
            }
            
            public function getdatosEmpleado()
        }

        public function ($vrvalor_retiro){
            if ($this->saldo > $)

            }

?>