<?php
/*
Crea una clase "Libro" con los atributos título, autor y editorial, y un método para mostrar su 
información completa. Crea un objeto de tipo "Libro" con valores aleatorios y muestra su 
información en pantalla.
*/

class Libro{
  private $titulo;
  private $autor;
  private $editorial;

  function __construct( $titulo="Sin titulo", $autor = "sin Autor",$editorial="Sin editorial"){
    $this->settitulo($titulo);
    $this->setautor($autor);
    $this->seteditorial($editorial);
  }

  public function settitulo(string $titulo)
  {
    $this->titulo = $titulo;
  }
  public function setAutor(string $autor){
    $this->autor = $autor;
  }
  public function seteditorial(string $editorial){
    $this->editorial = $editorial;
  }
  public function getTitulo()
  {
    return $this->titulo;
  }
  public function getautor(){
    return $this->autor;
  }
  public function getEditorial()
  {
    return $this->editorial;
  }

  public function mostrarPropiedades()
  {
    return get_object_vars($this);
  }  
}

$libro = new Libro("El lado B del amor","Gabriel Rolón");
foreach ($libro->mostrarPropiedades() as $propiedad => $value) {
  echo "$propiedad = $value".PHP_EOL;
}