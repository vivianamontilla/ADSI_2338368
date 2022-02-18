<?php 

    class Persona{

        private $cedula;
        public $nombre;
        protected $edad;

        //metodo constructor  int solo indica recibir enteros
        //string recibir cadenas de caracteres
        public function __construct($vrcedula, $vrnombre, $vredad)
        {
            $this->cedula = $vrcedula;
            $this->nombre = $vrnombre;
            $this->edad = $vredad;
        }
         
        public function getCedula(){
            return $this->cedula;
        }
         
        public function setCedula($vrcedula){
            $this->cedula = $vrcedula;
        }
        public function getsalario(){
    }

}//end clase

?>