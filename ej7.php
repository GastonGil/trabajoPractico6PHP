<?php
/*
Crea una clase "Producto" con los atributos nombre, precio y cantidad. Crea un objeto de tipo 
"Producto" y muestra su información en pantalla. 
*/

class Producto{
  private $nombre;
  private $precio;
  private $cantidad;

  function __construct( $nombre = "sin nombre", $precio = 0,$cantidad = 0){
    $this->setNombre($nombre);
    $this->setPrecio($precio);
    $this->setCantidad($cantidad);
  }

  public function setNombre(string $nombre)
  {
    $this->nombre = $nombre;
  }
  public function setPrecio(int $precio){
    $this->precio = $precio;
  }
  public function setCantidad(int $cantidad){
    $this->cantidad = $cantidad;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getPrecio(){
    return $this->precio;
  }
  public function getCantidad()
  {
    return $this->cantidad;
  }

  public function mostrarPropiedades()
  {
    return get_object_vars($this);
  }  
}

$producto = new Producto("Nike","$100000",10);
foreach ($producto->mostrarPropiedades() as $propiedad => $value) {
  echo "$propiedad = $value".PHP_EOL;
}