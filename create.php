<?php

require "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    $query = "INSERT INTO users (name, email, phone_number) VALUES ($1, $2, $3);";
    $stmt = pg_prepare($conn, "insert_user", $query);

    if(!$stmt){
        die("failed to prepare statement.");
    }



    $result = pg_execute($conn,"insert_user", [$name, $email, $phone_number]);

    if($result){

        print "user created succefully.";
        header("Location: index.html");
        exit();

    }else{
        print "Failed to create user.";


}
}



?>