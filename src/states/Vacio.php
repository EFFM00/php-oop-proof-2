<?php

namespace Elena\PhpOopProof2\states;

namespace Elena\PhpOopProof2\states\IEstado;

use Elena\PhpOopProof2\models\Carrito;

use Elena\PhpOopProof2\models\Producto;

class Vacio implements IEstado{

    private Carrito $carrito;

    private array $productos;

    private float $subtotal;

    private float $total;

    
    public function agregarProducto(Producto $producto): void{

        if(
            $producto->nombre === "x" ||
            $producto->nombre === "y" ||
            $producto->nombre === "z"
        ) {
            $producto[] = $producto;
        } else {
            throw new Exception("Solo se pueden agregar productos x, y o z");
        }

        $carrito->setEstado(new Cargado($this->productos, $this->peso, $this->precio));
    }
    


    // PASAR A OTRA CLASE

    public function sacarProducto(Producto $producto){

    }



    public function contarCantidadProductos():int {
        return count($productos);
    }
    


    public function subtotalPorProducto(Producto $producto): float {
        return $subtotal;
    }
    


    public function montoTotal():float {
        return $montoTotal;
    }
    


    public function verificarPesoPermitido():bool {

    }
    


    public function setCarrito(Carrito $carrito):void {
      $this->carrito = $carrito;  
    }



}
