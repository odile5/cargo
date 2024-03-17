<?php
include('loginprocess.php')
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
            width: 350px;
            height: 350px;  
            margin-top: 200px;   
            margin-left: 580px;       
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
        .submit{
            font-size: 15px;
            background-color: rgb(7, 7, 7);
            color:white ;
        }

    </style>
</head>
<body>
    <div class="container">
     <div class="content">
        <div class="header">
            <h1>LOGIN</h1>
        </div>
        <div class="form"> 
        <form method="post">
          <label for="">Username:</label>
          <input type="text" name="username">
          <br><br><br>
          <label for="">Password:</label>
          <input type="password" name="password">
          <br><br><br>
          <button class="submit" name="submit">Login</button>
          <br><br>
          Don't have an account?<a href="signup.php">Sign in.</a>
        </form>
    </div>
     </div>
    </div>
</body>
</html>
