<?php
echo "hola";
?>
<?php 
echo "Bienvenido " . $_SESSION['usuario'];
// Recibimos por POST los datos procedentes del formulario 
$servi = $_POST["servicio"];            // Asi recogemos el nombre desde el formulario 
$servicio = strip_tags($servi);  
$n_servi = strlen($servicio);    // Contamos el numero de caracteres 

$canti = $_POST["cantidad"];            // Asi recogemos el email desde el formulario 
     if (!is_numeric($canti)) { 
        echo "No son numeros"; 
    }  
    else {
        echo "Son numeros";
    }
$fecha = date("d-m-Y");        // Asi recogemos la fecha 
     // Asi recogemos la hora 

$total_car = $n_servi * $canti;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1) {  
    // Abrimos la conexion a la base de datos 
    function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
    $query= "INSERT INTO $ingreso (nombre,canidad,fecha) VALUES ('$servi', '$canti', '$fecha')");  
    
    // Cerramos la conexion a la base de datos 
    pg_close($pg_conn);
     
    // Confirmamos que el registro ha sido insertado con exito 
     
    echo " 
    <p>Los datos han sido guardados con exito.</p> 
     
    <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 
     
    <p><a href='http://www.uterra.com/archcodfuente/demos/id103/lista2.php' title='Clic aquí'>Ver los resgistros guardados</a></p> "; 
    
}else{
    echo " 
    Los campos <b>nombre</b> y <b>cantidad</b> no pueden estar vacios.<br /> 
    <a href=\"javascript:history.go(-1)\">Volver</a>"; 
    echo "El usuario no existe";
    exit();
} 
?> 
