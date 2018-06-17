<?php
$a1;
$a2;
$a3;
$a4;
$a5;
 $v=$_POST["check"];
 
$a=$_POST["MyRadio"];
 



if($v=="on") {
 
 
if($a=="Romans") $a1++;
 
if($a=="Westerns") $a2++;
 
if($a=="Sci- fi") $a3++;
 
if($a=="Detectives") $a4++;
 
if($a=="History") $a5++;
 
 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "anketa";
for ($p = 0; $p < count($pole); $p++)
	if ($pole[$p]!="") $pole2[$p]++;


 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO stats(vala, valb,valc,vald,vale) 
                VALUES ($a1, $a2, $a3, $a4, $a5         )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
 

?>