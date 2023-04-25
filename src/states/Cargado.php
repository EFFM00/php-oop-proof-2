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
        if(count($productos) > 0) {
            unset($productos[$producto]);
        } else {
            throw new Exception("Solo se pueden agregar productos x, y o z");
        }

        if(count($productos) === 0) {
            $carrito->setEstado(new Vacio());
        }
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
        
        $pesoAct = 0;

        foreach ($productos as $prod) {
            $pesoAct += $prod["peso"];
        }

        if($pesoAct < 5) {

            $carrito->setEstado(new Enviado($this->productos, $this->peso, $this->precio));

            return true;
        } else {
            throw new Exception("El paquete debe pesar menos de 5 Kg.");
        }
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
