<?php
$usuario = $_POST['1'];
$pass = $_POST['2'];

if(empty($usuario) || empty($pass)){
	header("Location: index.html");
	exit();
}

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT Usuario, Contrasena"
     . "FROM usuario");

if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
else{
	while($row = pg_fetch_row($result)){
		if($row['2'] ==  $pass){
		session_start();
		$_SESSION['1'] = $usuario;
		header("Location: contenido.php");
		}else{
		echo "Hola " ;
		header("Location: index.php");
		exit();
			}
		}
	}
}else{
	echo "Hola "; 
	header("Location: index.php");
	exit();
}
?>
