<?php
    $dbhost = "localhost";
    $dbuser = "admin_chandradb";
    $dbpass = "FKMgFcbF3b";
    $dbname = "admin_moocdb";

    $conn  = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    if($conn->connect_error){
        die("Could not connect to the database!" . $conn->connect_error);
    }
    else {
//        echo "Connected successfully";
    }
 ?>
