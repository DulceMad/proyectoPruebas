<?php
require_once 'Calculadora.php';

function determinarProducto($promedio, CalculadoraPromedioVentas $calculadora)
{
    $ventas = [10, 20, 30];
    $promedioCalculado = $calculadora->calcularPromedioVentas($ventas);

    if ($promedio == 30 || ($promedio >= 15 && $promedio <= 45)) {
        return "Producto PUSH";
    } else {
        return "Producto PULL";
    }
}

//$promedioEjemplo = 45.36;
//$resultado = determinarProducto($promedioEjemplo);
//echo "Para un promedio de $promedioEjemplo, el resultado es: $resultado";
?>
