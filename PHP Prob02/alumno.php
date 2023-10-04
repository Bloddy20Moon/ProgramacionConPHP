<?php
class Alumno {
    private $ep; // Nota del examen parcial
    private $pp; // Promedio de prácticas
    private $ef; // Nota del examen final

    public function __construct($ep, $pp, $ef) {
        $this->ep = $ep;
        $this->pp = $pp;
        $this->ef = $ef;
    }

    public function calcularPromedio() {
        return ($this->ep + $this->pp + $this->ef) / 3;
    }

    public function obtenerCondicion() {
        $promedio = $this->calcularPromedio();
        if ($promedio >= 11) {
            return "Aprobado";
        } else {
            return "Desaprobado";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ep = floatval($_POST["ep"]);
    $pp = floatval($_POST["pp"]);
    $ef = floatval($_POST["ef"]);

    $alumno = new Alumno($ep, $pp, $ef);
    $promedio = $alumno->calcularPromedio();
    $condicion = $alumno->obtenerCondicion();
} else {
    $ep = $pp = $ef = $promedio = $condicion = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calificación de Alumno</title>
    <style>  
        body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
          }

         h1 {
        text-align: center;
        margin-top: 20px;
        color: #333;
        }

        form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        }

        input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        }

        input[type="submit"]:hover {
        background-color: #0056b3;
        }

        h2 {
        margin-top: 20px;
        color: #333;
        }
    </style>
    
</head>
<body>
    <h1>Calificación de Alumno</h1>
    <form method="POST" action="">
        <label for="ep">Examen Parcial:</label>
        <input type="number" name="ep" id="ep" step="0.01" required><br>

        <label for="pp">Promedio de Prácticas:</label>
        <input type="number" name="pp" id="pp" step="0.01" required><br>

        <label for="ef">Examen Final:</label>
        <input type="number" name="ef" id="ef" step="0.01" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultados:</h2>
        <p>Promedio: <?php echo $promedio; ?></p>
        <p>Condición: <?php echo $condicion; ?></p>
    <?php endif; ?>
</body>
</html>
