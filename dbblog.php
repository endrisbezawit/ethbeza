<?php
/*$con=mysqli_connect("localhost","root","","ethblog");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }*/
  $servername = "198.71.227.83:3306"; //198.71.227.83:3306 (MySQL)
$username = "ethblog";
$password = "Addis@1961";
$db = "ph11078348311_"; //	ph11078348311_

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

 ?>