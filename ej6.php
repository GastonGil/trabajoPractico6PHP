<?php
/*
Crea una clase "Empleado" con los atributos nombre, salario y un método para calcular el salario 
anual. Crea un objeto de tipo "Empleado" con valores aleatorios y muestra su salario anual en 
pantalla.
*/

class Empleado{
  private $nombre;
  private $salario;

  function __construct( $nombre = "sin nombre", $salario = 0){
    $this->setNombre($nombre);
    $this->setSalario($salario);
  }

  public function getNombre()
  {
    return $this->nombre;
  }  
  public function setNombre(string $nombre)
  {
    $this->nombre = $nombre;
  }  
  public function getSalario()
  {
    return $this->salario;
  }  
  public function setSalario(float $salario)
  {
    $this->nombre = $salario;
  }  
  public function salarioAnual()
  {
    echo $this->salario * 12;
  }  
}

$empleado = new Empleado("Pepe", floatval(mt_rand(1, 500000)));

$empleado->salarioAnual();