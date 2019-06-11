<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "", "busbooking");
    if(!$db){
        echo "error ".mysqli_connect_error();
    }
    if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query ="SELECT contact, password From user where contact='$username' and password='$password'";
    $result = mysqli_query($db, $query);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION["username"] = $username;
        header("location: book.php");
    }else{
        echo "username or password incorrect";
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            height: auto;
            width: auto;
            padding: 10px;
            background-color:DarkTurquoise;
        
    </style>
</head>
<body  >

    <div>
    </u><h1 style ="text-align: center"><u>Login here</u></h1>
    
    
    <form action="login.php" method="post" style ="text-align: center; font-size: 100%;font-family: Verdana, Geneva, Tahoma, sans-serif">
        
        Username: 
        <input type ="text" name ="username" placeholder="Enter your name"/><br><br><br>
        Password:
        <input type ="password" name="password" placeholder="Enter your password"/> <br><br><br>
         <tr>
      <td>Login:</td>
      <td><input type="submit" name="login" placeholder="login"><br></td>
      </tr><br>
      <tr> 
      <td><a href="#">Lost your password?</a><br></td>
      </tr><br>
      <tr>
      <td><a href="registerhere.php">Dont have an account?</a></td>
      </tr>
        
    </form>

    </div>
  
</body>
</html>