<?php

require 'db.php';


// $server = "localhost";
// $username = "root";
// $pass = "";
// $dbname = "todo";

$conn = new mysqli($server, $username, $pass, $dbname);

if($conn->connect_error){
    die("Connection failed!".$conn->connect_error);
}

// $sql = "CREATE TABLE myTodoTable(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     todoTask VARCHAR(50),
//     todoTask_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE){
//     echo "Table created success";
// } else {
//     echo "Error creating table: ". $conn->error;
// }