<?php
require_once("_db.php");

$sql = "SELECT uid,fname,lname,Joining,status FROM `tbl_users` WHERE email = '" . $_POST['email'] . "' AND password = '" .($_POST['password']) . "' AND status=1";
//echo $sql;


$result = $con->query($sql);
//var_dump($result);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    session_unset();
    session_destroy();
    session_start();

    $_SESSION["uid"] = $row["uid"];
    $_SESSION["fname"] = $row["fname"];
    $_SESSION["lname"] = $row["lname"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["join_on"] = $row["Joining"];
    $_SESSION["status"] = $row["status"];
    //echo('Login Successful');
    header('Location: http://localhost/websites/micro_finance_web_app');

} else {
    //echo ('Somethings Wrong, Try again ');
    header ('location:javascript://history.go(-1)');
}
$con->close();
