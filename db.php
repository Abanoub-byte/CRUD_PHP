<?php

$server_name = "localhost";
$port = "5432";
$user_name = "bob";
$pwd = "123";
$dbname = "crud_db";

$conStr = "host=$server_name port=$port dbname=$dbname user=$user_name password=$pwd";
$conn = pg_connect($conStr);

if ($conn) {
    echo "Connection succeeded<br>";
    
} else {
    echo "Connection failed<br>";
}


?>
