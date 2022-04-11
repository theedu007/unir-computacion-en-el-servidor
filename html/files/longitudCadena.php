<?php

/*
*   Verificamos que el parametros vengan en el form
*   si vienen en el form realizamos la operacion deseada
*/
if(isset($_POST["cadena"])) {
    $longitud = strlen($_POST["cadena"]);
    echo $longitud;
} else {
    //Si el parametro no viene en la llamada regresamos un mensaje de error
    echo "No se pude determinar la longitud de la cadena";
}

?>