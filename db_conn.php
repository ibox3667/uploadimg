<?php
    $servername = "sql6.freesqldatabase.com";
    $username = "sql6515245";
    $password = "iLI38q3hwy";
    $db_name = "sql6515245";
    $port = 3306;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name, $port);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed");
      exit();
    }
?>