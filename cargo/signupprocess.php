<?php
error_reporting(E_ALL);

ini_set('display_errors',1);

include('connect.php');

if(isset($_POST['submit'])){
    $name=$_POST['names'];
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $phone=$_POST['phone'];

     $sql="INSERT INTO manager (names, username, password, phone) VALUES ('$name','$user','$pass','$phone')";
     $query= mysqli_query($connection,$sql);

    if($query){
        header("location:login.php");
    }else{
        echo"failed";
    }
}
  