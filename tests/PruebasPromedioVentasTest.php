<?php
require_once __DIR__ . '/../app/ventas.php';
require_once __DIR__ . '/../app/producto.php';
use PHPUnit\Framework\TestCase;

class PruebasPromedioVentasTest extends TestCase
{
    public function testCalcularPromedioVentas()
    {
        $ventasEjemplo = [30, 20, 10, 17, 15];
        $promedioEjemplo = calcularPromedioVentas($ventasEjemplo);
        
        $this->assertEquals(18.4, $promedioEjemplo, 'El promedio de ventas no coincide');
    }

    public function testDeterminarProductoParaPromedio30()
    {
        $resultado = determinarProducto(30);
        $this->assertEquals('Producto PUSH', $resultado, 'El resultado para promedio 30 no coincide');
    }

    public function testDeterminarProductoParaPromedioEntre15Y45()
    {
        $resultado = determinarProducto(25);
        $this->assertEquals('Producto PUSH', $resultado, 'El resultado para promedio entre 15 y 45 no coincide');
    }

    public function testDeterminarProductoParaPromedioFueraDeRango()
    {
        $resultado = determinarProducto(50);
        $this->assertEquals('Producto PULL', $resultado, 'El resultado para promedio fuera de rango no coincide');
    }
}
