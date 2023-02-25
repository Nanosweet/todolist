<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO Lista</title>
</head>
<body>
    <?php
        require 'get.php';
        //require_once 'add.php';        
    ?>
    <div>
        <h3>TODO lista</h3>
        
        <ul>
            <?php
                while ($row = $result->fetch_assoc()) 
                {
                    echo "<li>".$row["todoTask"]."</li>";?>
                    <form action="delete.php" method="post">
                    <button type="submit" name="id" value="<?php echo $row["id"] ; ?>" >wyjebaj</button>
                    </form> <?php
                }
            ?>
        </ul>
    </div>
    <form action="add.php" method="post">
        <input type="text" name="taskName" placeholder="Insert Task Name...">
        <button type="submit">Dodaj</button>
    </form>

</body>
</html>
<?php





//$sql = "INSERT INTO myTodoTable(todoTask) VALUE ('Zadanie 1')";
//$conn->query($sql);


//$conn -> close();

echo "php panowie php";