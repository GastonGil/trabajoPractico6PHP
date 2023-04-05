<?php
/*Crea una clase "Perro" con los atributos raza, edad y color. Crea un objeto de tipo "Perro" y muestra 
sus atributos en pantalla.*/

class Perro {
  private $raza;
  private $edad;
  private $color;

  function __construct($raza = "Sin raza", $edad = "Sin edad", $color = "Sin color")
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


$datosPerro=[];
array_push($datosPerro,readline("Ingrese el raza del perro: "));
echo PHP_EOL;
array_push($datosPerro,readline("Ingrese la edad del perro: "));
echo PHP_EOL;
array_push($datosPerro,readline("Ingrese el color del perro: "));
echo PHP_EOL;
$perro = new Perro($datosPerro[0],$datosPerro[1],$datosPerro[2]);

echo $perro->getraza();
echo PHP_EOL;
echo $perro->getEdad();
echo PHP_EOL;
echo $perro->getcolor();
echo PHP_EOL;