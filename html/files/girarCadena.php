<?php 

// Gira la cadena usando for para iterar sobre la cadena
function GirarCadenaUsandoFor($cadena) {
    // Convertimos nuestra cadena a un array
    $arrayStr = str_split($cadena);

    // La cadena resultado que vamos a regresar
    $cadenaResultado = "";

    for($i = count($arrayStr) - 1; $i > -1; $i--) {
        $cadenaResultado = $cadenaResultado . $arrayStr[$i];
    }

    return $cadenaResultado;
}

// Gira una cadena usando while para iterar sobre la cadena
function GirarCadenaUsandoWhile($cadena) {
    // Convertimos nuestra cadena a un array
    $arrayStr = str_split($cadena);

    // La posicion inical del array siempre es 0
    $inicio = 0;

    // Obtenemos la posicion final del array
    // la ultima posicion es: la cantidad de elemtos del vector - 1;
    $final = count($arrayStr) - 1;

    // Iteramos sobre el array mientras el valor de $inicio sea menor que $final
    while($inicio < $final) {

        // Obtenemos el valor de las posiciones del array
        $elemInicio = $arrayStr[$inicio];
        $elemFinal = $arrayStr[$final];
        
        // Asignamos los valores en las posiciones
        $arrayStr[$inicio] = $elemFinal;
        $arrayStr[$final] = $elemInicio;

        // Aumentamos el valor de $inicio y disminuimos el valor de $final
        $inicio++;
        $final--;
    }

    //Se une el array y lo regresamos como un string
    return implode($arrayStr);
}

// Gira una cadena usando do-while para iterar sobre la cadena
function GirarCadenaUsandoDoWhile($cadena) {
    // Convertimos nuestra cadena a un array
    $arrayStr = str_split($cadena);

    // La cadena resultado que vamos a regresar
    $cadenaResultado = "";

    // Obtenemos la posicion final del array
    // la ultima posicion es: la cantidad de elemtos del vector - 1;
    $final = count($arrayStr) - 1;

    //Iteramos sobre el array
    do {
        $cadenaResultado = $cadenaResultado . $arrayStr[$final];
        $final--;
    } while ($final > 0);
}

/*
*   Verificamos que el parametros vengan en el form
*   si vienen en el form realizamos la operacion deseada
*/
if(isset($_POST["cadenaGiro"]) && isset($_POST["operadorGiro"])) {
    $operador = $_POST["operadorGiro"];
    $cadena = $_POST["cadenaGiro"];

    //Vemos que operacion desea realizar el usuario
    if($operador == "for") {
        echo GirarCadenaUsandoFor($cadena);
    }
    elseif($operador == "while") {
        echo GirarCadenaUsandoWhile($cadena);
    }
    elseif($operador == "dowhile") {
        echo GirarCadenaUsandoWhile($cadena);
    }
    else {
        echo "Operacion no soportada";
    }
} else {
    echo "No se puede realizar la operacion";
}

?>