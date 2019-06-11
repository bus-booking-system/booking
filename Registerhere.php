<?php
    $db = mysqli_connect("localhost", "root", "", "busbooking");
    if(!$db){
        echo "error ".mysqli_connect_error();
    }
    if(isset($_POST["send"])){
    $name = $_POST["name"];
    $contact = $_POST["phonenumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $query ="INSERT Into user(name, contact, password, email) values('$name', '$contact', '$password', '$email')";
    $result = mysqli_query($db, $query);
    header("location:login.php");
    if(!$result){
        echo "error ".mysqli_error($db);
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
    </u><h1 style ="text-align: center"><u>Register Here</u></h1>
    
    
    <form action="registerhere.php" method="POST" style ="text-align: center; border=3; font-size: 100%;font-family: Verdana, Geneva, Tahoma, sans-serif">
        
        Name: 
        <input type ="text" name ="name" placeholder="Enter your name"/><br><br><br>
            
        Contact:
        <input type ="text" name="phonenumber" placeholder="Enter your phone number"/><br><br><br>
         
        E-mail:
        <input type ="email" name ="email" placeholder="Enter your Email"/><br><br><br> 
         
        Password:
        <input type="password" name="password" placeholder="Enter your Password"/><br><br><br> 
        
        Submit:
        <input type="submit" name="send"/><br><br> 
        
        Reset:
        <input type="reset"/> 

    </form>

    </div>
  
</body>
</html>