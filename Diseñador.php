<?php
require_once "Empleado.php";
// Definición de la clase Diseñador que extiende de la clase Empleado
class Diseñador extends Empleado {
   
    // Declaración del atributo privado $herramienta
    private $herramienta;

    // Definición del constructor de la clase Diseñador
    public function __construct($nombre, $apellido, $sueldo, $herramienta) {
        // Llamada al constructor de la clase padre (Empleado) para inicializar los atributos heredados
        parent::__construct($nombre, $apellido, $sueldo);
        // Inicialización del atributo $herramienta con el valor pasado al constructor
        $this->herramienta = $herramienta;
    }
    
    // Método para obtener el valor del atributo $herramienta
    public function getHerramientas() {
        return $this->herramienta;
    }
    public function tarea(){
        return "El Diseñador ". $this->getNom().$this->getApellido(). " Esta diseñando en ". $this->getHerramientas();
    }
}
?>