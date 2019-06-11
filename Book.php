<?php
    $db = mysqli_connect("localhost", "root", "", "busbooking");
    if(!$db){
        echo "error ".mysqli_connect_error();
    }
    if(isset($_POST["elly"])){
    $seat = $_POST["Seat"];
    $name = $_POST["Name"];
    $from = $_POST["From"];
    $to = $_POST["To"];
    $date = $_POST["Date"];
    $number = $_POST["Contact"];

    $query ="INSERT Into irene(seat, name, from_travel, to_travel, date_travel, contact) values('$seat', '$name', '$from', '$to', '$date', '$number')";
    $result = mysqli_query($db, $query);
    if(!$result){
        echo "error ".mysqli_error($db);

    }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BOOKING APP</title>
        <style>
        body{
            background:purple;
        }

        .seatPlan{
            width:325px;
            margin:auto;
            height:auto;
            background:white;
            padding:15px;
        }

        input[type=button]{
            background:skyblue;
            width:70px;
            padding:10px;
            font-size:22px;
            font-weight:bold;
            border-radius:5px;
        }

        input[type=text]{
            width:320px;
            padding:10px;
            font-size:22px;
            font-weight:bold;
            margin-top:20px;
            border-radius:5px;
        }

        
        input[type=date]{
            width:320px;
            padding:10px;
            font-size:22px;
            font-weight:bold;
            margin-top:20px;
            border-radius:5px;
        }
            
        input[type=number]{
            width:320px;
            padding:10px;
            font-size:22px;
            font-weight:bold;
            margin-top:20px;
            border-radius:5px;
        }

        button{
            width:450px;
            padding:10px;
            font-size:22px;
            font-weight:bold;
            margin-top:20px;
            border-radius:5px;
            background:#3498DB;
            color:white;
        }

        div{
            display:inline-block;
        }
        </style>
    </head>
    <body>
        <div class="information">
         <form action="Book.php" method="POST" name="info">
             <input type="button" value="Seat" style="width:100px;"><input type="text" name="Seat" id="text1"><br><br>
             <input type="button" value="Name" style="width:100px;"><input type="text" name="Name" id="text2"><br><br>
             <input type="button" value="From" style="width:100px;"><input type="text" name="From" id="text3"><br><br>
             <input type="button" value="To"style="width:100px; "><input type="text" name="To" id="text4"><br><br>
             <input type="button" value="Date" style="width:100px;"><input type="date" name="Date" id="text5"><br><br>
             <input type="button" value="Contact" style="width:100px;"><input type="number" name="Contact" id="text6"><br><br>
             <button style="Submit" value="Book"  name="elly" >Book</button>
         </form>   
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="seatPlan">
            <h1 align="center">CoICT BOOKING APP</h1>
            <h2 align="center">Click to select your seat</h2>
            <form>
                <input type="button" value="A1" id="A1" onclick="info.text1.value+='A1' ; document.getElementById('A1').style.backgroundColor='#F19481';">
                <input type="button" value="A2" id="A2" onclick="info.text1.value+='A2' ; document.getElementById('A2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="A3" id="A3" onclick="info.text1.value+='A3' ; document.getElementById('A3').style.backgroundColor='#F19481';">
                <input type="button" value="A4" id="A4" onclick="info.text1.value+='A4' ; document.getElementById('A4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="B1" id="B1" onclick="info.text1.value+='B1' ; document.getElementById('B1').style.backgroundColor='#F19481';">
                <input type="button" value="B2" id="B2" onclick="info.text1.value+='B2' ; document.getElementById('B2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="B3" id="B3" onclick="info.text1.value+='B3' ; document.getElementById('B3').style.backgroundColor='#F19481';">
                <input type="button" value="B4" id="B4" onclick="info.text1.value+='B4' ; document.getElementById('B4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="C1" id="C1" onclick="info.text1.value+='C1' ; document.getElementById('C1').style.backgroundColor='#F19481';">
                <input type="button" value="C2" id="C2" onclick="info.text1.value+='C2' ; document.getElementById('C2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="C3" id="C3" onclick="info.text1.value+='C3' ; document.getElementById('C3').style.backgroundColor='#F19481'; ">
                <input type="button" value="C4" id="C4" onclick="info.text1.value+='C4' ; document.getElementById('C4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="D1" id="D1" onclick="info.text1.value+='D1' ; document.getElementById('D1').style.backgroundColor='#F19481';">
                <input type="button" value="D2" id="D2" onclick="info.text1.value+='D2' ; document.getElementById('D2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="D3" id="D3" onclick="info.text1.value+='D3' ; document.getElementById('D3').style.backgroundColor='#F19481';">
                <input type="button" value="D4" id="D4" onclick="info.text1.value+='D4' ; document.getElementById('D4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="E1" id="E1" onclick="info.text1.value+='E1' ; document.getElementById('E1').style.backgroundColor='#F19481';">
                <input type="button" value="E2" id="E2" onclick="info.text1.value+='E2' ; document.getElementById('E2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="E3" id="E3" onclick="info.text1.value+='E3' ; document.getElementById('E3').style.backgroundColor='#F19481';">
                <input type="button" value="E4" id="E4" onclick="info.text1.value+='E4' ; document.getElementById('E4').style.backgroundColor='#F19481';">
                <br><br>
                <input type="button" value="F1" id="F1" onclick="info.text1.value+='F1' ; document.getElementById('F1').style.backgroundColor='#F19481';">
                <input type="button" value="F2" id="F2"  onclick="info.text1.value+='F2' ; document.getElementById('F2').style.backgroundColor='#F19481';">&emsp;&emsp;
                <input type="button" value="F3" id="F3" onclick="info.text1.value+='F3' ; document.getElementById('F3').style.backgroundColor='#F19481';">
                <input type="button" value="F4" id="F4" onclick="info.text1.value+='F4' ; document.getElementById('F4').style.backgroundColor='#F19481';">
                
                

            </form>
            <p align="center">Copyright&copyCoICTExpress2019</p>
        </div>
        <script src="book.js" alt="desktop"></script>
    </body>
</html>