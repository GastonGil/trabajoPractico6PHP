<?php
/*
Crea una clase "Persona" con los atributos nombre, edad y género, y un método para mostrar su 
información completa. Crea un objeto de tipo "Persona" con valores aleatorios y muestra su 
información en pantalla.
*/

class Persona {
  const DEFAULT_NOMBRE = "Sin nombre";
  const DEFAULT_EDAD = "Sin edad";
  const DEFAULT_GENERO = "Sin genero";
  private $nombre;
  private $edad;
  private $genero;

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
  public function setEdad(int $edad){
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
  public function mostrarPropiedades()
  {
    echo "Nombre: " . $this->nombre . PHP_EOL;
    echo "Edad: " . $this->edad . PHP_EOL;
    echo "Genero: " . $this->genero . PHP_EOL;
  }  
}

$persona = new Persona("Gastón",mt_rand(18,100),"Masculino");
$persona->mostrarPropiedades();
