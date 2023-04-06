<?php
/*Crea una clase "Perro" con los atributos raza, edad y color. Crea un objeto de tipo "Perro" y muestra 
sus atributos en pantalla.*/

class Perro {
  const DEFAULT_RAZA = "Sin raza";
  const DEFAULT_EDAD = "Sin edad";
  const DEFAULT_COLOR = "Sin color";

  private $raza;
  private $edad;
  private $color;

  function __construct($raza = self::DEFAULT_RAZA, $edad = self::DEFAULT_EDAD, $color = self::DEFAULT_COLOR)
  {
    $this->setraza($raza);
    $this->setEdad($edad);
    $this->setcolor($color);
  }
  public function getraza(){
    return $this->raza;
  }
  public function setraza(string $raza){
    $this->raza = $raza;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setEdad(int $edad){
    $this->edad = $edad;
  }
  public function getcolor(){
    return $this->color;
  }
  public function setcolor(string $color){
    $this->color = $color;
  }
}

do {
  $raza = trim(readline("Ingrese la raza del perro: "));
} while (empty($raza));
echo PHP_EOL;

do {
  $edad = (int) trim(readline("Ingrese la edad del perro: "));
} while ($edad <= 0);
echo PHP_EOL;

do {
  $color = trim(readline("Ingrese el color del perro: "));
} while (empty($color));
echo PHP_EOL;

$perro = new Perro($raza, $edad, $color);

echo $perro->getRaza();
echo PHP_EOL;
echo $perro->getEdad();
echo PHP_EOL;
echo $perro->getColor();
echo PHP_EOL;