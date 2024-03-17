<?php
include('connect.php');
if(isset($_post['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT*FROM manager";

    $result=mysqli_query($connection,$query);
 if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        if($username==$row['username'] && $password==$row['password']){
           session_start();
           $_SESSION['username']=$username;
           header("location:dashboard.php");
        }else if($username!=$row['username'] && $password==$row['password']){
            "<script>alert('wrong username');</script>";  
        }else if($username==$row['username'] && $password!=$row['password']){
            "<script>alert('wrong password');</script>";  
        }else{
            "<script>alert('user not found');</script>";
        }
    }
 }

}
?>