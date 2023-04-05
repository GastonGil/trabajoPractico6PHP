<?php

/*
Crea una clase "Banco" con los atributos nombre y cantidad de dinero, y dos métodos para depositar 
y retirar dinero. Crea un objeto de tipo "Banco" con un valor inicial de dinero, realiza algunas 
operaciones de depósito y retiro, y muestra el saldo final en pantalla.
*/

class Banco {
  private $nombre;
  private $cantidadDinero;
  private $genero;

  function __construct($nombre = "Sin nombre", $cantidadDinero = 0)
  {
    $this->setNombre($nombre);
    $this->setcantidadDinero($cantidadDinero);
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre(string $nombre){
    $this->nombre = $nombre;
  }
  public function getcantidadDinero(){
    return $this->cantidadDinero;
  }
  public function setcantidadDinero(float $cantidadDinero){
    $this->cantidadDinero = $cantidadDinero;
  }

  public function depositar(float $cantidadADepositar){
    if($cantidadADepositar > 0){
      $this->cantidadDinero+=$cantidadADepositar;
    }else{
      echo "La cantidad a depositar debe ser mayor a 0.".PHP_EOL;
    }
  }

  public function retirar(float $cantidadARetirar)
  {
    if ($cantidadARetirar > 0 && $cantidadARetirar < $this->cantidadDinero) {
      $this->cantidadDinero -= $cantidadARetirar;
    }else{
      echo "La cantidad a retirar debe ser mayor a 0 y menor a la cantidad que posee en la cuenta.".PHP_EOL;
    }  
  }  
  public function mostrarPropicantidadDineroes()
  {
    return get_object_vars($this);
  }  
}

function crearOpcion(&$opcion){
  do{
    echo "1-Depositar.".PHP_EOL;
    echo "2-Retirar.".PHP_EOL;
    echo "3-Fin".PHP_EOL;
    $opcion = readline();
    if($opcion == 3){
    echo "Fin del programa.".PHP_EOL;
    }
  }while($opcion < 1 || $opcion > 3);
}

function crearRespuesta(&$respuesta){
  do{
    $respuesta = readline("Desea continuar? Si/no: ");
  }while(strcmp($respuesta,"si")!=0 && strcmp($respuesta,"no")!=0);
  $respuesta = (strcmp($respuesta,"si")==0) ? true : false;
}

function crearNumeroValidado(){
  do{
    $n = readline("Ingrese el valor: ");
    echo PHP_EOL;
  }while(!is_numeric($n));
  return floatval ($n);
}

$banco = new Banco(readline("Ingrese su nombre: "));

do {
  crearOpcion($opcion);
  switch ($opcion) {
    case '1':
      $banco->depositar(crearNumeroValidado());
      break;
    case '2':
      $banco->retirar(crearNumeroValidado());
      break;
  }
} while ($opcion != 3);
foreach ($libro->mostrarPropiedades() as $propiedad => $value) {
  echo "$propiedad = $value".PHP_EOL;
}