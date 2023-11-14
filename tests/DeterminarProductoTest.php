<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../app/producto.php';

class DeterminarProductoTest extends TestCase
{
    public function testDeterminarProductoParaPromedio30()
    {
        $calculadoraMock = $this->createMock(CalculadoraPromedioVentas::class);

        $calculadoraMock->method('calcularPromedioVentas')
                        ->willReturn(30);

        $resultado = determinarProducto(30, $calculadoraMock);

        $this->assertEquals('Producto PUSH', $resultado, 'El resultado para promedio 30 no coincide');
    }

}

?>