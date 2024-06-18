<?php
require_once "Empleado.php";
// Definición de la clase Desarrollador que extiende de la clase Empleado
class Desarrollador extends Empleado {
    // Declaración del atributo privado $lenguaje
    private $lenguaje;
    // Definición del constructor de la clase Desarrollador
    public function __construct($nombre, $apellido, $sueldo, $lenguaje) {
        // Llamada al constructor de la clase padre (Empleado) para inicializar los atributos heredados
        parent::__construct($nombre, $apellido, $sueldo);
        // Inicialización del atributo $lenguaje con el valor pasado al constructor
        $this->lenguaje = $lenguaje;
    }
    // Método para obtener el valor del atributo $lenguaje
    public function getLenguaje() {
        return $this->lenguaje;
    }
    public function tarea(){
        return "El Desarrollador ". $this->getNom(). " ".$this->getApellido()." Esta escribiendo codigo en ". $this->getLenguaje();
    }
}
?>
