<?php
    interface IEmpleado {
        public function getNom();
        public function getApellido();
        public function getSueldo();
        public function calcularSalarioNeto();
        public function tarea();
    }
?>