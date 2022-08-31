<?php

   include "..\controladores\controladorcalculadora.php";

   $controladorCalculadora = new ControladorCalculadora();

   echo $controladorCalculadora->sumar(34,56);


?>