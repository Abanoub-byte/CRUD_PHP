<?php
require 'db.php';



$query = "DELETE FROM users WHERE id= $1 ";
$stmt = pg_prepare($conn, "delete_user", $query);

if(!stmt){
    die("failed to prepare statement.");
}

$result = pg_execute($conn, "delete_user", [$id]);

if($result){
    print "user deleted succeffully";
    header("Location: delete.php");
    exit();
}else{                                           
    print "failed to delete the user.";
}

?>