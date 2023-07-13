<?php
$servername = "localhost";
$username = "phptest";
$password = "test123";
$dbname ="microfinance1";

// Create connection
$con = new mysqli($servername, $username, $password,$dbname);
/* $con = new mysqli($servername,$dbname); */
// Check connection
if ($con->connect_error) {
    //DB related error handling goes here
  die("Connection failed: " . $con->connect_error);
}


?>