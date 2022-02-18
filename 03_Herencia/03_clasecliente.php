<?php 

    class Persona{

        private $cedula;
        public $nombre;
        public $salario;

        //metodo constructor  int solo indica recibir enteros
        //string recibir cadenas de caracteres
        function __construct(int $vrcedula, string $vrnombre, $vrsalario )
        {
            $this->cedula = $vrcedula;
            $this->nombre = $vrnombre;
            $this->edad = $vrsalario;
        }

        public function getCedula(){
            return $this->cedula;
        }

        public function setCedula($vrcedula){
            $this->cedula = $vrcedula;
        }
        

    }//end clase

?>