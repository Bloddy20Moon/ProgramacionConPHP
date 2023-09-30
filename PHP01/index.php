<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación Alumno</title>
</head>
<body>
    <?php
    // Incluimos la clase Alumno
    include('alumno.php');
    
    // Recuperamos los datos del formulario si se envió
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $promedio = isset($_POST['promedio']) ? floatval($_POST['promedio']) : 0;
    
     // Verificamos si se envió el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Creamos un objeto Alumno
        $alumno = new Alumno($nombre, $promedio);

        // Determinamos el estado del alumno
        $estado = $alumno->determinarEstado();
    }
    ?>
     <h1>Estado del Alumno</h1>
    <form method="POST" action="index.php">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="promedio">Promedio del Alumno:</label>
        <input type="number" id="promedio" name="promedio" step="0.01" required><br>

        <input type="submit" value="Calcular Estado">
    </form>

    <?php
    // Mostramos el resultado si se envió el formulario
    if (isset($estado)) {
        echo "<h2>Resultado para {$alumno->obtenerNombre()}:</h2>";
        echo "Promedio: {$alumno->obtenerPromedio()}<br>";
        echo "Estado: {$estado}";
    }
    ?>
</body>
</html>
------------------------------------------------------------------
    
    