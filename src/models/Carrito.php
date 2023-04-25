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
}
