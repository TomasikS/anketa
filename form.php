<!DOCTYPE html>
<html>
<head>

</head>
<body>
 
<h2>Survey</h2>
<form action="form.php" method="post">
<label>Which kind of books do you read :</label> <BR><BR>
<input type="radio" name="MyRadio" value="Romans"><label>Romans</label><BR><BR>
<input type="radio" name="MyRadio" value="Westerns"><label>Westerns</label><BR><BR>
<input type="radio" name="MyRadio" value="Sci- fi"><label>Sci- fi</label><BR><BR>
<input type="radio" name="MyRadio" value="Detectives"><label>Detectives</label><BR><BR>
<input type="radio" name="MyRadio" value="History"><label>History</label><BR><BR>
<input type="checkbox" name="check">I agree <BR><BR>

<input type="submit" name="submit" Value="Submit"/>
 
</form>
<BR><BR><BR>
<a href="graf.php" >Chart execution</a>
<BR><BR><BR>

<a href="graf.html" >Chart view</a>

<?PHP
$a1=0;
$a2=0;
$a3=0;
$a4=0;
$a5=0;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "anketa";


 $v=$_POST["check"];
 
$a=$_POST["MyRadio"];
 


 
  
  
  
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 $sql = "SELECT vala FROM stats";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
	while($row = mysqli_fetch_assoc($result))
$a1=$row["vala"];



 $sql = "SELECT valb FROM stats";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
	while($row = mysqli_fetch_assoc($result))
$a2=$row["valb"];


 $sql = "SELECT valc FROM stats";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
	while($row = mysqli_fetch_assoc($result))
$a1=$row["valc"];


 $sql = "SELECT vald FROM stats";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
	while($row = mysqli_fetch_assoc($result))
$a4=$row["vald"];

 $sql = "SELECT vale FROM stats";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
	while($row = mysqli_fetch_assoc($result))
$a5=$row["vale"];


mysqli_close($conn);


echo "Romans";
echo $a1;
echo "<br>";
echo "Westerns";
echo $a2;
echo "<br>";

echo "Sci- fi";
echo $a3;
echo "<br>";

echo "Detectives";
echo $a4;
echo "<br>";

echo "History";

echo $a5;
echo "<br>";
if($v=="on") {
 
 
if($a=="Romans") $a1++;
 
if($a=="Westerns") $a2++;
 
if($a=="Sci- fi") $a3++;
 
if($a=="Detectives") $a4++;
 
if($a=="History") $a5++;
 
 

 


 
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

</div>
</div>
</body>
</html>