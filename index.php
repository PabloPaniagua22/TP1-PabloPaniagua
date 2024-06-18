<!DOCTYPE html>
<html lang="es-ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
    require_once "Empleado.php";
    require_once "Diseñador.php";
    require_once "Desarrollador.php";
    require_once "IEmpleado.php";

        $empleado1 = new Desarrollador("Ana","Perez", 1000, "PHP");

        $empleado2 = new Diseñador("María", "García", 1200, "Photoshop");

        echo "Nombre :" .$empleado1->getNom();
        echo "<br>";
        echo "Apellido: ".$empleado1->getApellido();
        echo "<br>";
        echo "Sueldo: ".$empleado1->getSueldo();
        echo "<br>";
        echo "Sueldo NETO : ".$empleado1->calcularSalarioNeto();
        echo "<br>";
        echo "Tarea: ".$empleado1->tarea();


        //echo $empleado2;

?>
</body>
</html>
