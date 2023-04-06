<?php
/*
Crea una clase "Libro" con los atributos título, autor y editorial, y un método para mostrar su 
información completa. Crea un objeto de tipo "Libro" con valores aleatorios y muestra su 
información en pantalla.
*/

class Libro{
  const DEFAULT_TITULO = "Sin titulo";
  const DEFAULT_AUTOR = "Sin autor";
  const DEFAULT_EDITORIAL = "Sin editorial";
  private $titulo;
  private $autor;
  private $editorial;

  function __construct( $titulo=self::DEFAULT_TITULO, $autor = self::DEFAULT_AUTOR,$editorial=self::DEFAULT_EDITORIAL){
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
    echo "Titulo: " . $this->titulo . PHP_EOL;
    echo "Autor: " . $this->autor . PHP_EOL;
    echo "Editorial: " . $this->editorial . PHP_EOL;
  }  
}

$libro = new Libro("El lado B del amor","Gabriel Rolón");
$libro->mostrarPropiedades();