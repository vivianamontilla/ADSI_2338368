<?php
   require_once("01_claseCliente.php");
   require_once("02_usuario.php");
   require_once("03_cuentabancaria.php");

   $objCliente = new Cliente(30713456, "Ana Garcia", 2300000);

   echo "Nombre del cliente:" .$objCliente->nombre. "<br>";
   echo "salario: " . $objCliente-> getSalario() ."<br>";
   $objCliente->setSalario(2400000);
   echo "salario: " . $objCliente-> getSalario() ."<br>";



   $objUsuario = new Usuario(10000,"Carlos Trejo", 1300000, "carlos@hotmail.com", 123456);
   echo "<h2> CLASE USUARIO <H2>";
   echo "Nombre del usuario: " . $objUsuario->nombre ."<br>";
   echo "Salario: " . $objUsuario->getSalario() ."<br>";
   echo "Email: " . $objUsuario->getEmail();

   echo "<h2> CLASE DE CUENTA BANCARIA </H2>";
   $objCuenta = new cuentabancaria(1001,"tatiana", 1200000, "tatiana@hotmail.com", 123,200,"Ahorros", 100000);
   echo "nombre del usuario: " . $objCuenta->nombre ."<br>";
   echo "saldo: " .$objCuenta->getsaldo() ."<br>";
   //echo $objCuenta->setValor_retiro(250000);
   echo "valor a retirar: " .$objCuenta->vrvalor_retiro;
   echo $objCuenta->retiro(250000);


?>