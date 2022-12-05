<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uusdb";


    $conn = new mysqli($servername, $username, $password, $dbname);
    // check for errors while create a database

    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);
    
    }
    
    ?> 