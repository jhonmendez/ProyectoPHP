<?php 

    $numeroUno = 12;
    $numeroDos = 21;
    echo esPrimoRelativo($numeroUno,$numeroDos);

    function esPrimoRelativo($numeroUno,$numeroDos) {

        $esPrimoRelativo = true;

        if ($numeroUno%$numeroDos == 0 || $numeroDos%$numeroUno == 0 )

            $esPrimoRelativo = false;

        else 

            for ($i=2; $i < $numeroUno && $esPrimoRelativo; $i++) { 
            
                if ($numeroUno % $i == 0 && $numeroDos % $i == 0)
                    $esPrimoRelativo = false;
            }

        return $esPrimoRelativo;

    }



?>