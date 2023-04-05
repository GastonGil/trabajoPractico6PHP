<?php
/*Crea una clase "Persona" con los atributos nombre, edad y género. Instancia tres objetos con 
diferentes valores y muestra sus atributos en pantalla.*/

class Persona {
  private $nombre;
  private $edad;
  private $genero;

  function __construct($nombre = "Sin nombre", $edad = "Sin edad", $genero = "Sin genero")
  {
    $this->setNombre($nombre);
    $this->setEdad($edad);
    $this->setGenero($genero);
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre(string $nombre){
    $this->nombre = $nombre;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setEdad(int $edad){
    $this->edad = $edad;
  }
  public function getGenero(){
    return $this->genero;
  }
  public function setGenero(string $genero){
    $this->genero = $genero;
  }
}

$personas = [];
for ($i = 0; $i < 3; $i++){
  $datos=[];
  array_push($datos,readline("Ingrese el nombre de la persona: "));
  echo PHP_EOL;
  array_push($datos,readline("Ingrese la edad de la persona: "));
  echo PHP_EOL;
  array_push($datos,readline("Ingrese el genero de la persona: "));
  echo PHP_EOL;
  array_push($personas,$persona = new Persona($datos[0],$datos[1],$datos[2]));
}

foreach ($personas as $persona) {
  echo $persona->getNombre();
  echo PHP_EOL;
  echo $persona->getEdad();
  echo PHP_EOL;
  echo $persona->getGenero();
  echo PHP_EOL;
}
