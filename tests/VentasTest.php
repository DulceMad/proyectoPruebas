<?php
require_once __DIR__ . '/../app/ventas.php';
use PHPUnit\Framework\TestCase;

class VentasTest extends TestCase {
    public function testVentasConValoresPositivos() {
        $ventas = [15, 16, 17, 18, 19];
        $resultadoEsperado = 17;

        $promedio = calcularPromedioVentas($ventas);
        $this->assertEquals($resultadoEsperado, $promedio);
    }

    public function testVentasConValorCero() {
        $ventas = [0, 16, 17, 18, 25];
        $resultadoEsperado = 15.2;

        $promedio = calcularPromedioVentas($ventas);
        $this->assertEquals($resultadoEsperado, $promedio);
    }

    public function testVentasVacias() {
        $ventas = [];
        $resultadoEsperado = 0;

        $promedio = calcularPromedioVentas($ventas);
        $this->assertEquals($resultadoEsperado, $promedio);
    }
}
?>
