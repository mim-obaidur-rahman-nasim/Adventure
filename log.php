<?php
  session_start();
  $localhost=mysqli_connect("localhost","root","","regis");

  if(isset($_POST['btn'])){
     
      $mail =$_POST['email'];
      $pass =$_POST['pass'];

       $email_match = "SELECT * FROM reg WHERE email ='$mail' AND pass ='$pass'";
       $query= mysqli_query($localhost,$email_match);
       $mysql = mysqli_fetch_assoc($query);

       if ($mysql){

        $_SESSION['email'] =$mysql['email'];
             
        header('location:index.php');
           
       }
       else{
      
        echo "<script>alert('wrong  email or password')</script>";
       }
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
        .h button{
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
        
    <form class=g  action="" method="POST">
    <h2>Adventure</h2>
        <div class=h>
        <label for="email">Email</label>
        <input type="email"name="email" id="email" placeholder="Enter your email"><br>
        <label for="password" >Password</label>
        <input type="password"name="pass" placeholder="Enter your Password"><br> 
        <button type="submit"name="btn" value="login">Login</button>


        
    <button>  <a href="reg.php"style="text-decoration: none"> Sign Up</a></button>
        </div>
   
        
    </form>
    </div>
    
    
    
</body>
</html>