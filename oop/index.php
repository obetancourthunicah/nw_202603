<?php

require_once("vendor/autoload.php");

use Unicah\Oop\Math\Point as MPoint;
use Unicah\Oop\Shapes\Point as SPoint;

$instanciaUnaClase = new Unicah\Oop\UnaClase();

$instanciaUnaClase->printHola();

$MPuntoA = new MPoint(0, 0);
$MPuntoB = new MPoint(10, 10);

echo sprintf(
    "La distancia entre %s y %s es %f <hr/>",
    $MPuntoA->toString(),
    $MPuntoB->toString(),
    $MPuntoA->distance($MPuntoB)
);

$SPuntoA = new SPoint(-10, 0);
$SPuntoB = new SPoint(20, 20);

echo sprintf(
    "Punto a: <br/> %s <br/> Punto b: <br/> %s",
    $SPuntoA->toString(),
    $SPuntoB->toString()
);
