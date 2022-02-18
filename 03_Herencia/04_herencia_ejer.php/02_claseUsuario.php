<?php
    require_once("01_claseCliente.php");

    class Usuario extends Cliente {

        private $email;
        private $password;


       //asignar los atrivutos
       public function __construct($vrcedula, $vernombre, $vrsalario, $vremail, $vrpassword){

          //parent permite llevar los datos a la calse cliente
          parent::__construc($vrcedula, $vrnombre, $vrsalari);
          $this->email = $vremail;
          $this->password = $vrpassword;

        }

        public fuction getEmail(){
            return $this->$vremail;

        }
        public function setEmail ($vremail)
    }  
        
    }//end clase


?>