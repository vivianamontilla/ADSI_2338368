<?php

   require_once("02_claseUsuario.php");

   class cuentabancaria extends Usuario{
       private $codigo;
       protected $tipo_cuenta;
       private $salario;
       public $vrvalor_retiro;
       //constructor
       public function __construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword, $vrcodigo, $vrsaldo, $vrtipo_cuenta){
        parent::__construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword);
        $this->codigo = $vrcodigo;
        $this->tipo_cuenta = $vrtipo_cuenta;
        $this->saldo = $vrsaldo;
    }
    public function getsaldo(){
       return $this->saldo;
       
    }
    public function setsaldo($vrsaldo){
       $this->saldo = $vrsaldo;
    }

    public function setValor_retiro($vrvalor_retiro){
        $this->valor_retiro=$vrvalor_retiro;
    }
    //metodo para hacer un retiro
    public function Retiro($vrvalor_retiro){
        if ($this->saldo > $vrvalor_retiro){
            $this->salto = $this->saldo - $vrvalor_retiro;
        }
        return $this->saldo;
    }

}//end clase

?>