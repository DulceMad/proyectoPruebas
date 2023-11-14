<?php


interface CalculadoraPromedioVentas
{
    public function calcularPromedioVentas(array $ventas);
}

class Calculadora implements CalculadoraPromedioVentas
{
    public function calcularPromedioVentas(array $ventas)
    {
        if (empty($ventas)) {
            throw new InvalidArgumentException('El array de ventas no puede estar vacío');
        }

        $totalVentas = array_sum($ventas);
        $numeroVentas = count($ventas);
        $promedio = $totalVentas / $numeroVentas;

        return $promedio;
    }
}
?>