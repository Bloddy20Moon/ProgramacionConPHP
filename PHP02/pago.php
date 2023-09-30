<php
include('pago.php');
if (isset($_POST ["btnProcesar '])){
$fecha = date('d-m-y'*);
$trabajador - $_POST[ 'txtTrabajador '];
categoria - $ _POST[' selCategoria');
Shoras = $ POST[ 'txtHoras'1:
SobjPago = new pago ($fecha, Strabajador, Scategoria, Shoras);
?›
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"›
<link href-"miEstilo.css" rel-"stylesheet"›
</head>
<body>
<header>
<h3>PAGO DE TRABAJADORES</ h3›
<h5>MANEJO DE METODO CONSTRUCTOR</h5>