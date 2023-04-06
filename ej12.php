<?php
/*
Crea una clase "Alumno" con los atributos nombre, edad y calificaciones, y un método para calcular 
su promedio. Crea un objeto de tipo "Alumno" con valores aleatorios y muestra su promedio en 
pantalla. Luego, modifica alguna calificación y muestra el nuevo promedio. 
*/

class Alumno {
  const DEFAULT_NOMBRE = "Sin nombre";
  const DEFAULT_EDAD = "Sin edad";

  private $nombre;
  private $edad;
  private $clasificaciones;

  function __construct($nombre = self::DEFAULT_NOMBRE, $edad = self::DEFAULT_EDAD, ...$clasificaciones)
  {
    $this->setNombre($nombre);
    $this->setEdad($edad);
    $this->setclasificaciones(...$clasificaciones);
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre(string $nombre){
    $this->nombre = $nombre;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setEdad(int $edad){
    if(!is_numeric($edad)||$edad<3){
      echo "La edad no puede ser menor a 3." . PHP_EOL;
    }else{
    $this->edad = $edad;
    }
  }
  public function getclasificaciones(){
    return $this->clasificaciones;
  }
  public function setclasificaciones(...$clasificaciones){
    $correcto = true;
    if (!empty($clasificaciones)) {
      foreach ($clasificaciones as $calificacion) {
        if (!is_numeric($calificacion) || $calificacion < 0 || $calificacion > 10) {
          echo ("Las calificaciones deben estar en el rango de 0 a 10.") . PHP_EOL;
          $correcto = false;
        }
      }
    }  
    if($correcto){
      $this->clasificaciones = $clasificaciones;
    }
  }

  public function promedioClasificaciones(){
    return $promedio = array_sum($this->clasificaciones)/count($this->clasificaciones);
  }
  public function mostrarPropiedades()
  {
    echo "Nombre: " .$this->nombre .PHP_EOL;
    echo "Edad: " .$this->edad .PHP_EOL;
    echo "Clasificaciones: " .implode(",",$this->clasificaciones).PHP_EOL;
  }

  public function modificarNota($notaAModificar, $nuevaNota)
  {
    for($i=0;$i<count($this->clasificaciones);$i++){
      if($this->clasificaciones[$i] == $notaAModificar){
        $this->clasificaciones[$i] = $nuevaNota;
      }
    }
  }  
}

$alumno = new Alumno("Gastón", 28, 1, 2, 3, 4, 5, 5);
echo $alumno->promedioClasificaciones().PHP_EOL ;
$alumno->modificarNota(1, 10);
echo $alumno->promedioClasificaciones().PHP_EOL ;

$alumno->mostrarPropiedades();
