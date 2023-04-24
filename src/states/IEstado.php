<?php

namespace Elena\PhpOopProof2\states;

use Elena\PhpOopProof2\models\Carrito;

use Elena\PhpOopProof2\models\Producto;


interface IEstado {

    public function agregarProducto(Producto $producto): void;
    
    public function sacarProducto(Producto $producto): void;

    public function contarCantidadProductos(): int;

    public function subtotalPorProducto(Producto $producto): float;

    public function montoTotal(): float;

    public function verificarPesoPermitido(): bool;

    public function setCarrito(Carrito $carrito): void;

}
