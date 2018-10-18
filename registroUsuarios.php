<?php
$ingr = $_POST['idengreso'];   
$ingres = strip_tags($ingr); // Asi recogemos el nombre desde el formulario 
$n_ingre = strlen($ingres); 

$conce= $_POST['concepto'];   
$concepto = strip_tags($conce); // Asi recogemos el nombre desde el formulario 
$n_conc = strlen($concepto); 

function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
$pgsql="INSERT INTO egreso (id,concepto) VALUES ('$ingr','$conce')";
?> 
