<?php
include('connect.php');
$sql="SELECT * FROM furniture";
$result=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body  {
  font-family: georgia;
  margin: 0;
  background-color:black;
  background-size: 1500px 735px;
  color: white;
  font-size:
}

/* Navigation bar */
.navigation{
  background-color: beige;
  padding: 10px;
  color: black

}
a{
    padding: 15%;
}

.navbar a {
  color:  chocolate;
  text-decoration: none;
  margin-right: 15px;
}

/* Heading */
.heading {
  text-align: center;
  padding: 5px;
  font-size: 30px;
  color: white;
  font-family:georgia;
}

/* Table */
table {
  width: 50%;
  border-collapse: collapse;
  margin-top: 20px;
  margin-left: 400px ;
  color: black;
}

th{
  padding: 10px;
  border: 5px solid black;
}
td{
    color:beige;
}

th {
  background-color:chocolate;
}
    </style>
</head>
<body>
    <div class="container">
     <div class="navigation">
        <a herf="dashboard.php">Home</a>
        <a herf="import.php">Import</a>
        <a herf="export.php">Export</a>
     </div>
        <div class="content">
        </buttton>
                <button name='submit'><a href='add.php'>Add an Item</a></button>
      <table>
        <thead>
            <tr> 
            <th>id</th>
            <th>Name</th>
            <th>Owner</th>
            <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['furnitureId'] . "</td>";
                echo "<td>" . $row['furnitureName'] . "</td>";
                echo "<td>" . $row['furnitureOwnerName'] . "</td>";
                echo "<td><button><a href='update.php'>update</a></buttton>
                <button name='submit'><a href='backend.php'>delete</a></button>
                </td>";
                echo "</tr>";
            } 
?>
        </tbody>
      </table>
        </div>
    </div>
</body>
</html>