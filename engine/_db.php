<?php
$servername = "localhost";
$username = "phptest";
$password = "test123";
$dbname ="e-market";

// Create connection
$con = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($con->connect_error) {
    //DB related error handling goes here
  die("Connection failed: " . $con->connect_error);
}


?>