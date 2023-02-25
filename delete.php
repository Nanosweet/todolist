<?php

require 'dbconn.php';


$id = $_POST["id"];




if (empty($id))
{
    echo "File is empty";
} else {
    
$sql = "DELETE FROM mytodotable WHERE id='$id'";

$conn->query($sql);
    
    header("Location: index.php");
    exit();
}






echo $id;