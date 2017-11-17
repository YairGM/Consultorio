<?php
header( 'Location: /index.html' ) ;  
$dsn = "pgsql:"
    . "host=ec2-107-22-167-179.compute-1.amazonaws.com;"
    . "dbname=d3c4fd6uvu77r5;"
    . "user=d3c4fd6uvu77r5;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=a1b95e6ba14e1ad1be10adc991f17237a481349d8498508e75d9b50eaa589632";

$db = new PDO($dsn);
?>
