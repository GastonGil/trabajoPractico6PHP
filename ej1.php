<?php
/*Crea una clase "Persona" con los atributos nombre, edad y género. Instancia tres objetos con 
diferentes valores y muestra sus atributos en pantalla.*/

class Persona {
  private $nombre;
  private $edad;
  private $genero;

  const DEFAULT_NOMBRE = "Sin nombre";
  const DEFAULT_EDAD = "Sin edad";
  const DEFAULT_GENERO = "Sin genero";

  function __construct($nombre = self::DEFAULT_NOMBRE, $edad = self::DEFAULT_EDAD, $genero = self::DEFAULT_GENERO)
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
  public function setEdad($edad){
    if (!is_numeric($edad) || $edad < 1) {
      echo "La edad no puede ser menor a 1.". PHP_EOL;
    }  
    $this->edad =(int) $edad;
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
  do{
    $nombre = trim(readline("Ingrese el nombre de la persona: "));
    echo PHP_EOL;
    $edad = (int)trim(readline("Ingrese la edad de la persona: "));
    echo PHP_EOL;
    $genero = trim(readline("Ingrese el genero de la persona: "));
    echo PHP_EOL;
  }while(empty($nombre)||empty($genero)||empty($edad));
  
  array_push($personas,$persona = new Persona($nombre,$edad,$genero));
}

foreach ($personas as $persona) {
  echo $persona->getNombre();
  echo PHP_EOL;
  echo $persona->getEdad();
  echo PHP_EOL;
  echo $persona->getGenero();
  echo PHP_EOL;
}
