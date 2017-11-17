<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consultorio medico</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">

</head>
<body>
    <div class="container">
        <div class="page-header">
            <h2>
                Consultorio medico
            </h2>
        </div>
        <div class="Menu">
        <ul>
            <li><a href="#home">Inicio</a></li>
            <li><a href="#alta">Alta</a></li>
            <li><a href="#consulta">Consulta</a></li>
        </ul>
        </div>
        <table>
   <thead>
    <tr>
     <th>Employee ID</th>
     <th>Last Name</th>
     <th>First Name</th>
     <th>Title</th>
    </tr>
   </thead>
   <tbody>
<?php

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT employee_id, last_name, first_name, title "
     . "FROM employees ORDER BY last_name ASC, first_name ASC");

if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
	while ($row = pg_fetch_row($result)) {
		echo $row[0];
	    echo "<tr>";
	    echo "<td>" . $row["employee_id"] . "</td>";
	    echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
	    echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
	    echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
	    echo "</tr>";
	}
}
?>
   </tbody>
  </table>
        <div class="footer">
            <p>Footer</p>
        </div>
    </div>
</body>
</html>>
