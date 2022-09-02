<?php

   include "..\controladores\controladorcalculadora.php";

   $controladorCalculadora = new ControladorCalculadora();

   $operadorUno = $_POST['operadorUno'];
   $operadorDos = $_POST['operadorDos'];;
   $operacion = $_POST['operacion'];;

   switch ($operacion) {
      case '+':
         $resultado =  $controladorCalculadora->sumar($operadorUno,$operadorDos);
         break;
         case '-':
         $resultado =  $controladorCalculadora->restar($operadorUno,$operadorDos);
         break;
         case '*':
         $resultado =  $controladorCalculadora->multiplicar($operadorUno,$operadorDos);
         break;
         case '/':
         $resultado =  $controladorCalculadora->dividir($operadorUno,$operadorDos);
         break;
      default:
         $resultado = "Error";
         break;
   }

   echo "El resultado de la multplicación es: ".$resultado;


?>