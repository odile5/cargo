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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        .content{
            width: 450px;
            height: 450px;  
            margin-top: 150px;   
            margin-left: 500px;       
            box-shadow: 2px 2px 11px 2px rgb(51, 50, 50);
            background-color: rgb(222, 222, 253);
        }
        .header{
            margin-top: 40px;
            text-align: center;
            color: black;
        }
        .form{
            margin-left: 50px;
            margin-top: 40px;
            color: black;
        }
        button{
            font-size: 15px;
            background-color: rgb(7, 7, 7);
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
        <div class="header">
            <h1>SIGNUP</h1>
        </div>
        <div class="form">
            <form method="post">
                <label for="">Name:</label>
                <input type="text" name="name">
                <br><br><br>
                <label for="">username:</label>
                <input type="text" name="username">
                <br><br><br>
                <label for="">Password:</label>
                <input type="password" name="password">
                <br><br><br>
                <label for="">phone</label>
                <input type="text" name="phone">
                 <br><br><br>
                <button type="submit" name="submit">SIGNUP</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>