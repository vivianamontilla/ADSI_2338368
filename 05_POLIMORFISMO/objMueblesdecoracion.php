<?php

    require_once("01_claseProducto.php");
    require_once("02_claseMueble.php");
    //crear un objeto o instancia
    $objProducto = new Producto("escritorio 1.20 m", 430000, "Disponible");

    echo "valor del producto: " .$objProducto->getprecio()."<br>";

    $objProducto->getinfoproductos();

    print_r('<pre>');
    print_r($objProducto);
    print_r('</pre>');
    echo producto::$estado;

    echo "<br>";
    echo "<h2> Datos de Clase Mueble </h2>";
    $objMueble = new Mueble("Mesa",3000000, "Disponible","cafe", "cedro");
    print_r('<pre>');
    print_r($objMueble);
    print_r('</pre>');

?>