<?php

namespace Elena\PhpOopProof2\states;

namespace Elena\PhpOopProof2\states\IEstado;

use Elena\PhpOopProof2\models\Carrito;

use Elena\PhpOopProof2\models\Producto;

class Enviado implements IEstado{


    private Carrito $carrito;

    private array $productos;

    private float $subtotal;

    private float $total;

    
    public function agregarProducto(Producto $producto){
        return null;
    }
    
    public function sacarProducto(Producto $producto){
        return null;
    }

    public function contarCantidadProductos():int {
        return count($this->productos);
    }

    public function subtotalPorProducto(Producto $producto): float {

        $cantProd = 0;

        foreach ($this->productos as $prod) {
            if($producto["nombre"] === $prod["nombre"]) {
                $cantProd ++;
            }
        }

        $subtotal = $cantProd * $producto["precio"];

        return $subtotal;
    }


    public function montoTotal():float {

        $arrTiposProd = array_unique($this->productos);

        $totalProd = 0;

        foreach ($arrTiposProd as $product) {
            $totalProd += $this->subtotalPorProducto($product);
        }

        $total = $totalProd;

        return $total;
    }



    public function verificarPesoPermitido():bool {
        return null;
    }



    public function setCarrito(Carrito $carrito):void {
        $this->carrito = $carrito;  
    }


    public function __construct(array $productos, float $peso, float $precio) {
        $this->productos = $productos;
        $this->peso = $peso;
        $this->precio = $precio;
    }

}
