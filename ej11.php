<?php

/*
Crea una clase "Banco" con los atributos nombre y cantidad de dinero, y dos métodos para depositar 
y retirar dinero. Crea un objeto de tipo "Banco" con un valor inicial de dinero, realiza algunas 
operaciones de depósito y retiro, y muestra el saldo final en pantalla.
*/

class Banco {
  const DEFAULT_NOMBRE = "Sin nombre";
  const DEFAULT_CANTIDADDEDINERO = 0;
  private $nombre;
  private $cantidadDinero;

  function __construct($nombre = self::DEFAULT_NOMBRE, $cantidadDinero = self::DEFAULT_CANTIDADDEDINERO)
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
    if(!is_numeric($cantidadDinero)||$cantidadDinero < 0){
      echo "La cantidad de dinero inicial debe ser mayor a 0.".PHP_EOL;
    }else{
      $this->cantidadDinero = $cantidadDinero;
    }
  }

  public function depositar(float $cantidadADepositar){
    if(!is_numeric($cantidadADepositar)||$cantidadADepositar < 0){
      echo "La cantidad a depositar debe ser mayor a 0.".PHP_EOL;
    }else{
      $this->cantidadDinero += $cantidadADepositar;
    }
  }

  public function retirar(float $cantidadARetirar)
  {
    if (is_numeric($cantidadARetirar) && $cantidadARetirar > 0 && $cantidadARetirar <= $this->cantidadDinero) {
      $this->cantidadDinero -= $cantidadARetirar;
    }else{
      echo "La cantidad a retirar debe ser mayor a 0 y menor a la cantidad que posee en la cuenta.".PHP_EOL;
    }  
  }  
  public function mostrarPropiedades()
  {
    echo "Nombre: " . $this->nombre . PHP_EOL;
    echo "Cantidad de dinero: " . $this->cantidadDinero . PHP_EOL;
  }  
}

function crearOpcion(&$opcion){
  do{
    echo "1-Depositar.".PHP_EOL;
    echo "2-Retirar.".PHP_EOL;
    echo "3-Fin".PHP_EOL;
    $opcion = trim(readline());
    if($opcion == 3){
    echo "Fin del programa.".PHP_EOL;
    }
  }while($opcion < 1 || $opcion > 3);
}

function crearRespuesta(&$respuesta){
  do{
    $respuesta = strtolower(trim(readline("Desea continuar? Si/no: ")));
  }while(strcmp($respuesta,"si")!=0 && strcmp($respuesta,"no")!=0);
  $respuesta = (strcmp($respuesta,"si")==0) ? true : false;
}

function crearNumeroValidado(){
  do{
    $n = trim(readline("Ingrese el valor: "));
    echo PHP_EOL;
  }while(!is_numeric($n)||empty($n));
  return floatval ($n);
}

$banco = new Banco(trim(readline("Ingrese su nombre: ")));

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
$banco->mostrarPropiedades();



