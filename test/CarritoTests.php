<?php

use PHPUnit\Framework\TestCase;

use Elena\PhpOopProof2\models\Producto;
use Elena\PhpOopProof2\models\Carrito;

class CarritoTests extends TestCase {

    private $carrito;

    public function setUp(): void {
        $this->$carrito = new Carrito();

        var_dump($this->carrito);
    }


    public function testAgregarProductos() {
        
        $x = new Producto("x", 223.45, 3.1);
        // $y = new Producto("y", 5000.39, 1.13);
        // $z = new Producto("x", 102.56, 4.8);
        
        // $carrito[] = $x;
        // $carrito[] = $y;
        $carrito[] = $z;

        // $this->carrito->agregarProducto($x);
        // $this->carrito->agregarProducto($y);
        $this->carrito->agregarProducto($z);

        $this->assertTrue($carrito->contarCantidadProductos() === 1);
    }

}
