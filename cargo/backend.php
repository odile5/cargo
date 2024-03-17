<?php
include('connect.php');
if(isset($_POST['submit'])){
    $name=$_POST['furniturename'];
    $owner=$_POST['furnitureOwnerName'];
    $query="INSERT INTO `furniture`(`furnitureName`, `furnitureOwnerName`) VALUES ('$name','$owner')";
    $insert=mysqli_query($connection,$query);
}