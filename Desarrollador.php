<?php

require "Empleado.php";
require "Diseñador.php";
// Definición de la clase Desarrollador que extiende de la clase Empleado
class Desarrollador extends Empleado {

    // Declaración del atributo privado $lenguaje
    public $lenguaje;

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

    // Método para mostrar la información del desarrollador
    public function mostrarInformacion() {
        // Llamada al método mostrarInformacion de la clase padre y concatenación del atributo $lenguaje
        return parent::mostrarInformacion() . " Lenguaje: " . $this->lenguaje;
    }
}

// Creación de una instancia de la clase Desarrollador
$empleado1 = new Desarrollador("Pablo", "Paniagua", 1000, "PHP");

// Creación de una instancia de la clase Diseñador
$empleado2 = new Diseñador("María", "García", 1200, "Photoshop");

// Mostrar la información del empleado1 (Desarrollador)
echo $empleado1->mostrarInformacion() . PHP_EOL;

// Mostrar la información del empleado2 (Diseñador)
echo $empleado2->mostrarInformacion() . PHP_EOL;

?>
