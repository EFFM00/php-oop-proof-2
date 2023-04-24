<?php

require 'vendor/autoload.php';

use Elena\PhpOopProof2\models\Producto;
use Elena\PhpOopProof2\models\Carrito;


$x = new Producto("x", 223.45, 3.1);
$y = new Producto("y", 5000.39, 1.13);
$z = new Producto("x", 102.56, 4.8);


print_r($x->toString());
print_r($y->toString());
print_r($z->toString());
