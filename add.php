<?php

require 'dbconn.php';

// $conn = new mysqli($server, $username, $pass, $dbname);

// if($conn->connect_error){
//     die("Connection failed!".$conn->connect_error);
// }


$taskName = $_POST['taskName'];

if (empty($taskName))
{
    echo "File is empty";
} else {
    
    $sql = "INSERT INTO myTodoTable (todoTask) VALUES ('$taskName')";
    $conn ->query($sql);
    
    header("Location: index.php");
    exit();
}
