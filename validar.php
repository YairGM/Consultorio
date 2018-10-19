<?php
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if (empty($usuario) || empty($pass)){
	header("Location: login.php");
	echo "<h2>El usuario y contraseña estan vacios</h2>";
	exit();
}

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT usuario, contrasena FROM usuario WHERE usuario='$usuario'");


if($row = pg_fetch_array($result)){

	if($row['contrasena'] ==  $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: contenido.php");
	}else{
		header("Location: login.php");
		echo "<h2>La contraseña esta incorrecta</h2>";
		exit();
	}
}else{
	header("Location: login.php");
	echo "El usuario no existe";
	exit();
}
?>