<?php
include('connect.php');

if(isset($_POST['submit'])){
    $name=$_POST['furnitureName'];
    $owner=$_POST['furnitureOwnerName'];

    $query="INSERT INTO `furniture`(`furnitureName`, `furnitureOwnerName`) VALUES ('$name','$owner')";
    $sql=mysqli_query($connection,$query);
    if ($connection->query($sql) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error adding record: " . $connection->error;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action=""method="post"> 
            <label for=""name="name">Name</label>
            <input type="text"name="furnitureName">
            <label for=""name="owner">owner</label>
            <input type="text"name="furnitureOwnerName">
            <button type="submit" name="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>