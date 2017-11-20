<?php
session_start();
include 'index.php';
include 'footer.php';;
echo "Bienvenido " . $_SESSION['usuario'];
echo "\nRegistro de egresos";
?>

