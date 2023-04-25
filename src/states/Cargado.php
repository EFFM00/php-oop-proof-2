<?php

namespace Elena\PhpOopProof2\states;

namespace Elena\PhpOopProof2\states\IEstado;

use Elena\PhpOopProof2\models\Carrito;

use Elena\PhpOopProof2\models\Producto;

class Cargado implements IEstado{


    private Carrito $carrito;

    private array $productos;

    private float $subtotal;

    private float $total;

    
    public function agregarProducto(Producto $producto){

        if(
            $producto->nombre === "x" ||
            $producto->nombre === "y" ||
            $producto->nombre === "z"
        ) {
            $producto[] = $producto;
        } else {
            throw new Exception("Solo se pueden agregar productos x, y o z");
        }

    }
    
    public function sacarProducto(Producto $producto){
        if(count($producto) > 0) {
            unset($productos[$producto]);
        } else {
            throw new Exception("Solo se pueden agregar productos x, y o z");
        }

        if(count($productos) === 0) {
            $carrito->setEstado(new Vacio());
        }
    }

    public function contarCantidadProductos():int {

    }

    public function subtotalPorProducto(Producto $producto): float {

    }

    public function montoTotal():float {

    }

    public function verificarPesoPermitido():bool {

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
