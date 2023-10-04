<?php
    include('pago.php');

    if (isset($_POST['btnProcesar'])) {
        $fecha = date('d-m-y');
        $trabajador = $_POST['txtTrabajador'];
        $categoria = $_POST['selCategoria'];
        $horas = $_POST['txtHoras'];

        $objPago = new pago($fecha, $trabajador, $categoria, $horas);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="miEstilo.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>PAGO DE TRABAJADORES</h1>
    <h5>MANEJO DE METODO CONSTRUCTOR</h5>
</header>
<section>
    <form method="POST">
        <table border="0" width="800" cellspacing="1" cellpadding="1">
            <tr>
                <td></td>
                <td></td>
                <td>Fecha</td>
                <td>FECHA: <?php echo date('d-m-y'); ?></td>
                <td rowspan="7">
                    <p><img src="img/trabajador.png" width="250" height="280" /></p>
                </td>
            </tr>
            <tr>
                <td>TRABAJADOR</td>
                <td colspan="3">
                    <input type="text" name="txtTrabajador" size="70" value="" />
                </td>
            </tr>
            <tr>
                <td>CATEGORIA</td>
                <td><select name="selCategoria">
                        <option value="Operario">Operario</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Jefe">Jefe</option>
                    </select>
                </td>
                <td>HORAS TRABAJADAS</td>
                <td><input type="text" name="txtHoras" value="" /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnProcesar" value="Procesar" />
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>COSTO POR HORA</td>
                <td><?php if (isset($_POST['btnProcesar'])) {
                        echo '$' . number_format($objPago->determinaCostoHora(), 2);
                    }?>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>SALARIO BRUTO</td>
                <td><?php if (isset($_POST['btnProcesar'])) {
                        echo '$' . number_format($objPago->calculaSubtotal(), 2);
                    }?>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>DESCUENTO</td>
                <td><?php if (isset($_POST['btnProcesar'])) {
                        echo '$' . number_format($objPago->calculaDescuento(), 2);
                    }?>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>SALARIO NETO</td>
                <td><?php if (isset($_POST['btnProcesar'])) {
                        echo '$' . number_format($objPago->calculaNeto(), 2);
                    }?>
                </td><td></td>
                <td></td>
            </tr>
        </table>
</section>
        <footer>
            <h5>Departamento de Contabilidad</h5>
        </footer>
    </form>
</body>
</html>
