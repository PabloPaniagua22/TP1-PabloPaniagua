<?php
require_once "IEmpleado.php";
// Definición de la clase Empleado
abstract class Empleado implements IEmpleado {
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
    abstract public function tarea();
}
?>