<?php
session_start();
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];
echo "\nConsulta de ingresos";
?>

