<?php 
include('connect.php');

if(isset($_POST['submit'])){

// Get values from the form
$id=$_POST['furnitureId'];
$name = $_POST['furnitureName'];
$owner= $_POST['furnitureOwnerName'];
 

// Update the database table
$sql = "UPDATE furniture SET furnitureName = '$name', furnitureOwnerName = '$owner' WHERE furnitureId = '$id'";

if ($connection->query($sql) === TRUE) {
    header("Location:dashboard.php");
    exit();
} else {
    echo "Error updating record: " . $connection->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Furniture</title>
</head>
<body>
    <h2>Update Furniture</h2>
    <form action="update.php" method="POST">
        <label for="furnitureId">Furniture ID:</label><br>
        <input type="text" id="furnitureId" name="furnitureId" value="<?php echo isset($row['furnitureId']) ? $row['furnitureId'] : ''; ?>" readonly><br>

        <label for="furnitureName">New Furniture Name:</label><br>
        <input type="text" id="furnitureName" name="furnitureName" required><br>
        <label for="furnitureOwnerName">New Owner Name:</label><br>
        <input type="text" id="furnitureOwnerName" name="furnitureOwnerName" required><br><br>
        <button type="submit" name="submit" value="Update">update</button>
    </form>
</body>
</html>
