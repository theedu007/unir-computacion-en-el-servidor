<?php 

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

if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
    $resultado = Operar($_POST['num1'], $_POST['num2'], $_POST['operador']);
    echo $resultado;
}
else {
    echo "No se puede realizar operacion, faltan parametros";
}
?>