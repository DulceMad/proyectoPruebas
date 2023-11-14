<?php
require_once __DIR__ . '/../app/producto.php';

use PHPUnit\Framework\TestCase;

class test_producto extends TestCase {
    public function testPromedio30() {
        $resultado = determinarProducto(30);

        $this->assertEquals("Producto PUSH", $resultado);
    }

    public function testPromedioDentroDelRango() {
        $resultado = determinarProducto(25);

        $this->assertEquals("Producto PUSH", $resultado);
    }

    public function testPromedioMenor15() {
        $resultado = determinarProducto(10);

        $this->assertEquals("Producto PULL", $resultado);
    }

    public function testPromedioMayor45() {
        $resultado = determinarProducto(50);

        $this->assertEquals("Producto PULL", $resultado);
    }

    public function testPromedioNegativo() {
        $resultado = determinarProducto(-5);

        $this->assertEquals("Producto PULL", $resultado);
    }
}
