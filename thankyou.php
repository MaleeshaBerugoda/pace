<?php
$name=$_GET["fname"];
echo "you name is:-" .$name;
$course=$_GET["course"];
echo "<br>Your Course is:-" .$course;
$birthday=$_GET["birthday"];
echo "<br>Your Birthday is:-" .$birthday;
$subjects=$_GET["subjects"];
echo "<br>Your Subject is:-" .$subjects;
$message=$_GET["message"];
echo "<br>Your Message is:-" .$message;
$topics=$_GET["topics"];
echo "<br>Your Topic is:-" .$topics;
$sport_1=$_GET["sport_1"];
echo "<br>Sport1:-" .$sport_1;
$sport_2=$_GET["sport_2"];
echo "<br>Sport2:-" .$sport_2;
$sport_3=$_GET["sport_3"];
echo "<br>Sport3:-" .$sport_3;
$sport_4=$_GET["sport_4"];
echo "<br>Sport4:-" .$sport_4;
$email=$_GET["email"];
echo "<br>Your E mail is:-" .$email;
$password=$_GET["password"];
echo "<br>The  Password:-" .$password;
$upload=$_GET["upload"];
echo "<br>The Password is:-" .$upload;
$age=$_GET["age"];
echo "<br>Your age is:-" .$age;

?>
<html>
    <body>
       <h2>Thankyou</h2> 

       <p id="demo">Please Read Properly before Submit!</p>
       
       <Button type="button" onclick='document.getElementById("demo").innerHTML="Got it!"'>ok</Button>


    </body>
</html>