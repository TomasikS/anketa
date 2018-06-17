
 
  
  
  <?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "anketa";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT vala,valb,valc,vald,vale from stats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
	
	
	$q1=$row["vala"];
	$q2=$row["valb"];
	$q3=$row["valc"];
	$q4=$row["vald"];
	$q5=$row["vale"];
       
    }
} else {
    echo "0 results";
}
$conn->close();

 
	/* Libchart - PHP chart library
	 * Copyright (C) 2005-2011 Jean-Marc Trémeaux (jm.tremeaux at gmail.com)
	 * 
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 * 
	 */
	
	/*
	 * Vertical bar chart demonstration
	 *
	 */

	
  include "./libchart/classes/libchart.php";
  
	$chart = new PieChart(500, 260);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Romans", $q1));
	$dataSet->addPoint(new Point("Westerns", $q2));
	$dataSet->addPoint(new Point("Sci- fi", $q3));
	$dataSet->addPoint(new Point("Detectives", $q4));
	$dataSet->addPoint(new Point("History", $q5));
	$chart->setDataSet($dataSet);

 

	$chart->setTitle("Survey stats");
	$chart->render("C:/ou//demo.png");
 
 


?>
 

