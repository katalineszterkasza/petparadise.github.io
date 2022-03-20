<?php

function open_connection() {
    $servername = "localhost";
    $username = "petparadise";
    $password = "petparadise";
    $dbname = "y2022";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) { 
        die("Connecting failed: " . $conn->connect_error);
    }
    else{
        echo("Successful connection");
    }

    return $conn;
}
 function close_connection($conn){
    $conn->close();
 }

 $conn= open_connection();
 close_connection($conn);

 function 


?>