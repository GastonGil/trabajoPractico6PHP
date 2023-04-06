<?php
/* 
Crea una clase "Rectángulo" con los atributos base y altura, y un método para calcular el área del 
rectángulo. Crea un objeto de tipo "Rectángulo" con valores aleatorios y muestra su área en 
pantalla.
*/

class Rectangulo{
  const DEFAULT_BASE = 0;
  const DEFAULT_ALTURA = 0;
  private $base;
  private $altura;

  function __construct($base = self::DEFAULT_BASE,$altura = self::DEFAULT_ALTURA){
    $this->setBase($base);
    $this->setAltura($altura);
  }

  public function getBase(){
    return $this->base;
  }
  public function getAltura(){
    return $this->altura;
  }

  public function setBase(float $base){
    $this->base = $base;
  }
  public function setAltura(float $altura){
    $this->altura = $altura;
  }

  public function area(){
    return ($this->base * $this->altura/2);
  }
}

$rectangulo = new Rectangulo(floatval(mt_rand()),floatval(mt_rand()));
echo $rectangulo->area();