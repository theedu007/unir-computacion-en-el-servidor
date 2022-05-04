<?php 

/*
*  Esta funcion regresa el resultado 
*  de la operacion que el usario desee realizar
*/
function Operar($num1, $num2, $operador) {
    $resultado = 0;
    switch ($operador) {
        case "sum":
            $resultado = $num1 + $num2;
            break;
        case "res":
            $resultado = $num1 - $num2;
            break;
        case "mul":
            $resultado = $num1 * $num2;
            break;
        case "div":
            // verificamos que el segundo numero no sea cero
            // ya que no podemos dividir entre cero
            if ($num2 == 0) {
                $resultado = "No se puede dividir entre cero";
            } else {
                $resultado = $num1 / $num2;
            }
            break;
        default:
            $resultado = "Operacion no disponible";
    }

    return $resultado;
}

/*
*   Verificamos que los parametros vengan en el form
*   si vienen en el form realizamos la operacion deseada
*/
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
    
    $resultado = Operar($_POST['num1'], $_POST['num2'], $_POST['operador']);
    echo $resultado;
    
} else {
    /*
    *  Si algunos de los inputs del form no esta presente,
    *  regresamos un mensaje de advertencia al usuario 
    */
    echo "No se puede realizar operacion, faltan parametros";
}
?>