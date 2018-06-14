<?php
$pole =array("", "", "", "", "");
$pole2 =array(0,0,0,0,0);
$v=$_POST["check"];
 


$a;

if($v=="on") {
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {

foreach($_POST['check_list'] as $selected) {
	$a= $selected;
echo "<p>".$selected ."</p>";
for ($p = 0; $p < count($pole); $p++)
	$pole[$p]=$a;
}
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
                VALUES ($pole2[0], $pole2[1], $pole2[2], $pole2[3], $pole2[4]           )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else{
echo "<b>Please select one option.</b>";

}}
}

else{
echo "<b>Please enter GDPR</b>";

}

?>