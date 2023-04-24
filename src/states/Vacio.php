<?php

namespace Elena\PhpOopProof2\states;

namespace Elena\PhpOopProof2\states\IEstado;

use Elena\PhpOopProof2\models\Carrito;

use Elena\PhpOopProof2\models\Producto;

class Vacio implements IEstado{

    
    public function agregarProducto(Producto $producto){

    }
    
    public function sacarProducto(Producto $producto){

    }

    public function contarCantidadProductos():int {

    }

    public function subtotalPorProducto(Producto $producto): float {

    }

    public function montoTotal():float {

    }

    public function verificarPesoPermitido():bool {

    }

    public function setVariable($name, $var) {
        
    }



}
