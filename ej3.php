<?php
/*Crea una clase "Calculadora" con los métodos suma, resta, multiplicación y división. Crea un objeto 
de tipo "Calculadora" y muestra el resultado de algunas operaciones aritméticas.*/

class Calculadora{
  private $resultado;
  private $valoresAOperar;

  function __construct($valoresAOperar){
    $this->setValoresAOperar($valoresAOperar);
  }

  public function getValoresAOperar(){
    return $this->valoresAOperar;
  }  
  public function setValoresAOperar(array $valoresAOperar){
    $this->valoresAOperar = $valoresAOperar;
  }

  public function getResultado(){
    return $this->resultado;
  }  

  public function sumar(){
    $this->resultado = array_sum($this->valoresAOperar);
  }
  public function restar(){
    $acumulador = 0;
    foreach ($this->valoresAOperar as $valor) {
      $acumulador = ($acumulador == 0) ? $valor : $acumulador - $valor;
    }
    $this->resultado = $acumulador;
  }
  public function multiplicar(){
    $this->resultado = array_product($this->valoresAOperar);
  }
  public function dividir()
  {
    $acumulador = 0;
    foreach ($this->valoresAOperar as $valor) {
      $acumulador = ($acumulador == 0) ? $valor : $acumulador / $valor;
    }
    $this->resultado = $acumulador;
  }  
}

function crearOpcion(&$opcion){
  do{
    echo "1-Sumar.".PHP_EOL;
    echo "2-Restar.".PHP_EOL;
    echo "3-Multiplicar.".PHP_EOL;
    echo "4-Dividir.".PHP_EOL;
    echo "5-Fin".PHP_EOL;
    $opcion = readline();
    if($opcion == 5){
    echo "Fin del programa.".PHP_EOL;
    }
  }while($opcion < 1 || $opcion > 5);
}

function crearRespuesta(&$respuesta){
  do{
    $respuesta = readline("Desea continuar? Si/no: ");
  }while(strcmp($respuesta,"si")!=0 && strcmp($respuesta,"no")!=0);
  $respuesta = (strcmp($respuesta,"si")==0) ? true : false;
}

function crearNumeroValidado(){
  do{
    $n = readline("Ingrese un número: ");
    echo PHP_EOL;
  }while(!is_numeric($n));
  return $n;
}
function cargarArray(&$array){
  do {
    $n = crearNumeroValidado();
    array_push($array, $n);
    crearRespuesta($respuesta);
  } while ($respuesta);
}
$valoresAOperar = [];
cargarArray($valoresAOperar);
$calculadora = new Calculadora($valoresAOperar);
do {
  crearOpcion($opcion);
  switch ($opcion) {
    case '1':
      $calculadora->sumar();
      echo $calculadora->getResultado() .PHP_EOL;
      break;
    case '2':
      $calculadora->restar();
      echo $calculadora->getResultado().PHP_EOL;
      break;
    case '3':
      $calculadora->multiplicar();
      echo $calculadora->getResultado().PHP_EOL;
      break;
    case '4':
      $calculadora->dividir();
      echo $calculadora->getResultado().PHP_EOL;
      break;
  }
} while ($opcion != 5);


