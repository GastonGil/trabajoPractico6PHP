<?php
/*
Crea una clase "Coche" con los atributos marca, modelo y color, y un método para mostrar su 
información completa. Crea un objeto de tipo "Coche" con valores aleatorios y muestra su 
información en pantalla.
*/

class Coche{
  const DEFAULT_MARCA = "Sin marca";
  const DEFAULT_MODELO = "Sin modelo";
  const DEFAULT_COLOR = "Sin color";


  private $marca;
  private $modelo;
  private $color;

  function __construct( $marca = self::DEFAULT_MARCA, $modelo = self::DEFAULT_MODELO,$color = self::DEFAULT_COLOR){
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
    echo "Marca: " . $this->marca . PHP_EOL;
    echo "Modelo: " . $this->modelo . PHP_EOL;
    echo "Color: " . $this->color . PHP_EOL;
  }  
}

$coche = new coche("Fiat","Palio","Rojo");
$coche->mostrarPropiedades();

