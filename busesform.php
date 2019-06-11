<?php
    $db = mysqli_connect("localhost", "root", "", "busbooking");
    if(!$db){
        echo "error ".mysqli_connect_error();
    }
    if(isset($_POST["send"])){
    $busname = $_POST["busname"];
    $busnumber = $_POST["busnumber"];
    $busroute = $_POST["busroute"];
    $fare= $_POST["fare"];
    $time = $_POST["time_travel"];
    

    $query ="INSERT Into buses(bus_name, bus_number, bus_route, fare, time_travel) values('$busname', '$busnumber', '$busroute', '$fare', '$time')";
    $result = mysqli_query($db, $query);
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
    </u><h1 style ="text-align: center"><u>Bus form</u></h1>
    
    
    <form action="busesform.php" method="POST" style ="text-align: center; font-size: 100%;font-family: Verdana, Geneva, Tahoma, sans-serif">
        
        Bus name: 
        <input type ="text" name ="busname" placeholder="Enter bus name"/><br><br><br>
        Bus number:
        <input type ="text" name="busnumber" placeholder="Enter bus number"/> <br><br><br>
        Bus route:
        <input type ="text" name ="busroute" placeholder="Enter route"/><br><br><br>
        Fare:
        <input type="text" name="fare" placeholder="Enter fare"/><br><br><br><br>
        Time:
        <input type="time" name="time_travel" placeholder="Enter time"/><br><br><br><br>
        Submit:
        <input type="submit" name="send"/><br><br>
        Reset:
        <input type="reset"/>

    </form>

    </div>
  
</body>
</html>