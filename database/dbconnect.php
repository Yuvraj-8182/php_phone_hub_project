<?php
    
    //connection to database and server
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'phone';
    
    //connection 
    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn)
    {
        die('database connection is not successfuly'.mysqli_connect_errno());
    }
   
?>