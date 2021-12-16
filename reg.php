<?php

  $localhost=mysqli_connect("localhost","root","","regis");

  if(isset($_POST['btn'])){
      $name=$_POST['name'];
      $mail =$_POST['email'];
      $pass =$_POST['pass'];

      $insert ="INSERT into reg (name,email,pass)values('$name','$mail','$pass')";
      $query = mysqli_query($localhost,$insert);

      $_SESSION['email'] =$mysql['email'];
             
      header('location:log.php');
  }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <style>
    *{
            box-sizing:border-box;
            margin:0 ;
            padding:0;
        }
        body{
            font-family:arial, sans-serif;
            background: #34495e;
            color:white;
            line-height:1.8;
        }
        .f{
            margin:30px auto;
            max-width:450px;
            padding:20px;
        }
        .g{
            background:#2c3e50;
            padding: 15px 25px;
            border: 1px solid #ddd;
            border-radius:6px;
        }
        .h{
            margin-top:10px;
        }
        .h label{
            display:block;
            color:white;
        }
        .h input{
            width:100%;
            padding:10px;
            border-radius:6px;
            border:1px solid white;
        }
        .h p input{
            display:block;
            width:100%;
            padding:10px;
            margin-top:20px;
            background-color:#1abc9c;
            border-radius:6px;
            font-weight:bold;
        }
        .g h2{
            text-align:center;
            font-family: 'Ephesis', cursive;
            font-size:50px;
            color:#d1ccc0;
        }
    </style>
</head>
<body>
<div class=f>
    <form class=g action="" method="POST">
    <h2>Adventure</h2>
        <div class=h>
        <lebel for="name">Name</lebel> 
        <input type="text"name="name" placeholder="Enter your name"><br>
        <lebel>E-mail</lebel> <br>
        <input type="email"name="email" placeholder="Enter your email"><br>
        <lebel>Password</lebel> <br>
        <input type="password"name="pass" placeholder="Enter your password"><br>
        <p><input type="submit"name="btn" value="Sign Up"></p>
    </div>
    </form>
</body>
</html>