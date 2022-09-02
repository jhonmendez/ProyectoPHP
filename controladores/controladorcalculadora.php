<?php

  class ControladorCalculadora {

    private $operadorUno;
    private $operadorDos;

    function __construct($operadorUno = '', $operadorDos=''){

      $this->operadorUno = $operadorUno;
      $this->operadorDos = $operadorDos;

    }


    function sumar($operadorUno = '', $operadorDos='') {

      $operadorUno = empty($operadorUno) ? $this->operadorUno : 
                     $operadorUno;

      $operadorDos = empty($operadorDos) ? $this->operadorDos : 
                     $operadorDos;
    
        return $operadorUno+$operadorDos;

    }

    function multiplicar($operadorUno, $operadorDos) {
    
        return $operadorUno*$operadorDos;

    }


    function restar($operadorUno, $operadorDos) {
    
        return $operadorUno-$operadorDos;

    }


    function dividir($operadorUno, $operadorDos) {
    
        return $operadorUno/$operadorDos;

    }



  }



?>