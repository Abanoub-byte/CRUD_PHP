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

if(!pg_close($conn)) {
    print "Failed to close connection to " . pg_host($conn) . ": " .
   pg_last_error($conn) . "<br/>\n";
} else {
    print "Successfully disconnected from database";
}
?>
