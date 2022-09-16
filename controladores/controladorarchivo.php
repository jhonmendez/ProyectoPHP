<?php

    $contenidoArchivo =  file_get_contents("../recursos/test.json");

    $datosJson = json_decode($contenidoArchivo,true);

    echo $datosJson['fechacontratacion'];

?