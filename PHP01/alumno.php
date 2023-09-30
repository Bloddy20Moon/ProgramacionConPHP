<?php
class Alumno {
    // Atributos
    private $nombre;
    private $promedio;
    
      // Constructor
    public function __construct($nombre, $promedio) {
        $this->nombre = $nombre;
        $this->promedio = $promedio;
    }
    
    
    // Método para determinar el estado del alumno
    public function determinarEstado() {
        if ($this->promedio >= 10) {
            return "Aprobado";
        } else {
            return "Desaprobado";
        }
    }
    
      // Método para obtener el nombre del alumno
    public function obtenerNombre() {
        return $this->nombre;
    }
    
     // Método para obtener el promedio del alumno
    public function obtenerPromedio() {
        return $this->promedio;
    }
}
?>