<?php
    require_once("01_clasepersona.php");

    class Empleado extends Cliente{

      private $puesto;

      public function __construct($vrcedula, $vrnombre, $vredad, $vrcdedito, $vrpuesto)
      {
        //perent:: llevo los datos al constructor de la clase persona 
        parent::__construct($vrcedula, $vrnombre, $vredad, $vrcdedito);
        $this->puesto = $vrpuesto;
    }

    }

?>