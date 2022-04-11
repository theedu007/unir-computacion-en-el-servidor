<?php

/*
*   Verificamos que el parametros vengan en el form
*   si vienen en el form realizamos la operacion deseada
*/
if(isset($_POST["cadena"])) {
    $longitud = strlen($_POST["cadena"]);
    echo $longitud;
} else {
    echo "No se pude determinar la longitud de la cadena";
}

?>