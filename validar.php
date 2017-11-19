<?php
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if (empty($usuario)|| empty($pass)){
	header("Location: index.php");
	exit();
}

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT usuario FROM usuario WHERE usuario='$usuario'");


if($row = pg_fetch_array($result)){
	echo $row['1'];
	if($row['contrasena'] ==  $pass){
		header("Location: contenido.php");
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: contenido.php");
	}else{
		//header("Location: index.php");
		exit();
	}
}else{
	//header("Location: index.php");
	exit();
}
?>
