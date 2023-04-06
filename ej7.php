<?php
/*
Crea una clase "Producto" con los atributos nombre, precio y cantidad. Crea un objeto de tipo 
"Producto" y muestra su información en pantalla. 
*/

class Producto{
  const DEFAULT_NOMBRE = "Si nombre";
  const DEFAULT_PRECIO = 0;
  const DEFAULT_CANTIDAD = 0;
  private $nombre;
  private $precio;
  private $cantidad;

  function __construct( $nombre = self::DEFAULT_NOMBRE, $precio = self::DEFAULT_PRECIO,$cantidad = self::DEFAULT_CANTIDAD){
    $this->setNombre($nombre);
    $this->setPrecio($precio);
    $this->setCantidad($cantidad);
  }

  public function setNombre(string $nombre)
  {
    $this->nombre = $nombre;
  }
  public function setPrecio(int $precio){
    if(!is_numeric($precio) || $precio < 0){
      echo "El precio no puede ser menor a 0.".PHP_EOL;
    }else{
    $this->precio = $precio;
    }
  }
  public function setCantidad(int $cantidad){
    if(!is_numeric($cantidad) || $cantidad < 0){
      echo "La cantidad no puede ser menor a 0.".PHP_EOL;
    }else{
      $this->cantidad = $cantidad;
    }
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
    echo "Nombre: " . $this->nombre . PHP_EOL;
    echo "Precio: $" . $this->precio . PHP_EOL;
    echo "Cantidad: " . $this->cantidad . PHP_EOL;
  }  
}

$producto = new Producto("Nike","$100000",10);
$producto->mostrarPropiedades();

