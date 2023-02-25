<?php


require 'dbconn.php';

$sql = "SELECT * FROM myTodoTable";

$result = $conn->execute_query($sql);

if (!$result) {
    die("Invalid query: " . $conn->error);
}





// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_all()) {
//         echo $row;
//     }
// }

