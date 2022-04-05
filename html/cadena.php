<?php 
if(isset($_POST["cadena"])) {
    $longitud = strlen($_POST["cadena"]);
    echo $longitud;
} else {
    echo "No se pude determinar la longitud de la cadena";
}
?>