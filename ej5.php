<?php
/*
Crea una clase "Círculo" con el atributo radio y un método para calcular el área del círculo. Crea un 
objeto de tipo "Círculo" con valor aleatorio y muestra su área en pantalla.
*/

class Circulo{
  const DEFAULT_RADIO = 0;
  private $radio;
  function __construct($radio = self::DEFAULT_RADIO){
    $this->setRadio($radio);
  }

  public function getRadio()
  {
    return $this->radio;
  }
  public function setRadio(float $radio){
    $this->radio = $radio;
  }
  public function area()
  {
    return M_PI * pow($this->radio, 2);
  }  
}

$circulo = new Circulo(floatval(mt_rand()));
echo $circulo->area();