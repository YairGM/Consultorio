<?php
session_start();
include 'header.php';
echo "Bienvenido " . $_SESSION['usuario'];
echo "\nConsulta de ingresos";
?>

