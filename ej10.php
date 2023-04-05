<?php
/*
Crea una clase "Persona" con los atributos nombre, edad y género, y un método para mostrar su 
información completa. Crea un objeto de tipo "Persona" con valores aleatorios y muestra su 
información en pantalla.
*/

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
  public function mostrarPropiedades()
  {
    return get_object_vars($this);
  }  
}

$persona = new Persona("Gastón",mt_rand(18,100),"Masculino");
foreach ($libro->mostrarPropiedades() as $propiedad => $value) {
  echo "$propiedad = $value".PHP_EOL;
}