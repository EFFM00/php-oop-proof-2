<?php

namespace Elena\PhpOopProof2\models;

namespace Elena\PhpOopProof2\states\IEstado;


class Carrito {

    private IEstado $estado;

    public function __construct() {
        setCarrito(new Vacio(this));
    }


    public function setEstado(Estado $estado):void {
        $this->estado = $estado;

        $this->estado->setCarrito($this);
    }


    public function agregarProducto(Producto $producto):void {
        $this->estado->agregarProducto($producto);
    }
    
    
    public function sacarProducto(Producto $producto):void {
        $this->estado->sacarProducto($producto);
    }
    
    
    public function contarCantidadProductos():int {
        $this->estado->contarCantidadProductos();
    }
    
    
    public function subtotalPorProducto(Producto $producto):float {
        $this->estado->subtotalPorProducto($producto);
    }
    
    
    public function montoTotal():float {
        $this->montoTotal->montoTotal();
    }
    
    
    public function verificarPesoPermitido():bool {
        $this->montoTotal->verificarPesoPermitido();
    }

}
