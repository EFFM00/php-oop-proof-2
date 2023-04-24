<?php

namespace Elena\PhpOopProof2\models;

class Producto {


    private string $nombre;
    private float $precio;
    private float $peso;


    public function __construct(
        string $nombre,
        float $precio,
        float $peso
    ) {

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->peso = $nombre;

    }


    
    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }



    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }



    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function toString() {
        return "Nombre: " . $this->nombre . ", Precio: " . $this->precio . ", Peso: " . $this->peso;
      }
}
