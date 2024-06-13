<?php

// Definición de la clase Empleado
class Empleado {
    
    // Declaración de los atributos privados
    private $nombre;
    private $apellido;
    private $sueldo;

    // Definición del constructor de la clase Empleado
    public function __construct($nombre, $apellido, $sueldo) {
        // Inicialización de los atributos con los valores proporcionados
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    // Método para obtener el valor del atributo $nombre
    public function getNom() {
        return $this->nombre;
    }

    // Método para obtener el valor del atributo $apellido
    public function getApellido() {
        return $this->apellido;
    }

    // Método para obtener el valor del atributo $sueldo
    public function getSueldo() {
        return $this->sueldo;
    }

    // Método para calcular el salario neto aplicando una deducción del 10%
    public function calcularSalarioNeto() {
        return $this->sueldo * 0.9;
    }

    // Método para mostrar la información del empleado
    public function mostrarInformacion() {
        // Construcción y retorno de una cadena con la información del empleado
        return "Nombre: " . $this->nombre . " Apellido: " . $this->apellido . " Sueldo: " . $this->sueldo . " Salario Neto: " . $this->calcularSalarioNeto();
    }
}

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

    // Método para mostrar la información del diseñador
    public function mostrarInformacion() {
        // Llamada al método mostrarInformacion de la clase padre y concatenación del atributo $herramienta
        return parent::mostrarInformacion() . ", Herramienta: " . $this->herramienta;
    }
}

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

    // Método para mostrar la información del desarrollador
    public function mostrarInformacion() {
        // Llamada al método mostrarInformacion de la clase padre y concatenación del atributo $lenguaje
        return parent::mostrarInformacion() . " Lenguaje: " . $this->lenguaje;
    }
}

// Creación de una instancia de la clase Desarrollador
$empleado1 = new Desarrollador("Juan", "Pérez", 1000, "PHP");

// Creación de una instancia de la clase Diseñador
$empleado2 = new Diseñador("María", "García", 1200, "Photoshop");

// Mostrar la información del empleado1 (Desarrollador)
echo $empleado1->mostrarInformacion() . PHP_EOL;

// Mostrar la información del empleado2 (Diseñador)
echo $empleado2->mostrarInformacion() . PHP_EOL;

?>
