<?php
function calcularPromedioVentas($ventas) {
    if (empty($ventas)) {
        return 0;
    }else{

        $totalVentas = array_sum($ventas);
        $numeroVentas = count($ventas);
        $promedio = $totalVentas / $numeroVentas;

        return $promedio;
    }

}

$ventasEjemplo = [30, 20, 10, 17, 15];
$promedioEjemplo = calcularPromedioVentas($ventasEjemplo);
echo "El promedio de ventas es: $promedioEjemplo";
?>
