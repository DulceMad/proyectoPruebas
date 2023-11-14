<?php

use PHPUnit\Framework\TestCase;
use Mockery as m;

require_once __DIR__ . '/../app/ventas.php';

class CalcularPromedioVentasTest extends TestCase
{
    public function tearDown(): void
    {
        m::close();
    }

    public function testCalcularPromedioVentasConVentasNoVacias()
    {
        $ventas = [30, 20, 10, 17, 15];

        $arraySumMock = m::mock();
        $arraySumMock->shouldReceive('array_sum')->with($ventas)->andReturn(92);

        $countMock = m::mock();
        $countMock->shouldReceive('count')->with($ventas)->andReturn(5);

        $resultado = calcularPromedioVentas($ventas);

        $this->assertEquals(18.4, $resultado, 'El promedio de ventas no coincide');
    }

    public function testCalcularPromedioVentasConVentasVacias()
    {
        $arraySumMock = m::mock();
        $arraySumMock->shouldReceive('array_sum')->never();

        $countMock = m::mock();
        $countMock->shouldReceive('count')->never();

        $resultado = calcularPromedioVentas([]);

        $this->assertEquals(0, $resultado, 'El promedio de ventas para un array vacío no coincide');
    }
}

?>