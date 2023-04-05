<?php
/*
Crea una clase "Coche" con los atributos marca, modelo y color, y un método para mostrar su 
información completa. Crea un objeto de tipo "Coche" con valores aleatorios y muestra su 
información en pantalla.
*/

class coche{
  private $marca;
  private $modelo;
  private $color;

  function __construct( $marca = "Sin marca", $modelo = "Sin modelo",$color = "Sin color"){
    $this->setmarca($marca);
    $this->setmodelo($modelo);
    $this->setcolor($color);
  }

  public function setmarca(string $marca)
  {
    $this->marca = $marca;
  }
  public function setmodelo(string $modelo){
    $this->modelo = $modelo;
  }
  public function setcolor(string $color){
    $this->color = $color;
  }
  public function getmarca()
  {
    return $this->marca;
  }
  public function getmodelo(){
    return $this->modelo;
  }
  public function getcolor()
  {
    return $this->color;
  }

  public function mostrarPropiedades()
  {
    return get_object_vars($this);
  }  
}

$coche = new coche("Fiat","Palio","Rojo");
foreach ($coche->mostrarPropiedades() as $propiedad => $value) {
  echo "$propiedad = $value".PHP_EOL;
}