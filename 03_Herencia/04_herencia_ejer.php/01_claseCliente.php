<?php

class Cliente{

    private $cedula;
    public $nombre;
    protected $salario;

  
    public function __construct( $vrcedula, $vrnombre, $vrsalario )
    {
        $this->cedula = $vrcedula;
        $this->nombre = $vrnombre;
        $this->salario = $vrsalario;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function setsalario($vrsalario){
        $this->salario = $vrsalario;
    }
    public function getsalario(){
        return $this->salario;

}


}

?>