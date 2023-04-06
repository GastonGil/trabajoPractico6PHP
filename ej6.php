<?php
/*
Crea una clase "Empleado" con los atributos nombre, salario y un método para calcular el salario 
anual. Crea un objeto de tipo "Empleado" con valores aleatorios y muestra su salario anual en 
pantalla.
*/

class Empleado{
  const DEFAULT_NOMBRE = "Sin nombre";
  const DEFAULT_SALARIO = 0;

  private $nombre;
  private $salario;

  function __construct( $nombre = self::DEFAULT_NOMBRE, $salario = self::DEFAULT_SALARIO ){
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
    if(!is_numeric($salario)||$salario<0){
      echo "El salario debe ser mayor a 0".PHP_EOL;
    }else{
      $this->salario = $salario;
    }
  }  
  public function salarioAnual()
  {
    return $this->salario * 12;
  }  
}

$empleado = new Empleado("Pepe", floatval(mt_rand(1, 500000)));
echo $empleado->salarioAnual();