<?php
/*
Crea una clase "Alumno" con los atributos nombre, edad y calificaciones, y un método para calcular 
su promedio. Crea un objeto de tipo "Alumno" con valores aleatorios y muestra su promedio en 
pantalla. Luego, modifica alguna calificación y muestra el nuevo promedio. 
*/

class Alumno {
  private $nombre;
  private $edad;
  private $clasificaciones;

  function __construct($nombre = "Sin nombre", $edad = "Sin edad", ...$clasificaciones)
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
    $this->edad = $edad;
  }
  public function getclasificaciones(){
    return $this->clasificaciones;
  }
  public function setclasificaciones(...$clasificaciones){
    $this->clasificaciones = $clasificaciones;
  }

  public function promedioClasificaciones(){
    return $promedio = array_sum($this->clasificaciones)/count($this->clasificaciones);
  }
  public function mostrarPropiedades()
  {
    return get_object_vars($this);
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

foreach ($alumno->mostrarPropiedades() as $propiedad => $value) {
  if($value == $alumno->getClasificaciones()){
    for ($i=0;$i<count($alumno->getClasificaciones()); $i++) {
      echo "Nota: ".$i+1 ."=" .$alumno->getClasificaciones()[$i] .PHP_EOL;
    }
  }else{
    echo "$propiedad = $value".PHP_EOL;
  }
}