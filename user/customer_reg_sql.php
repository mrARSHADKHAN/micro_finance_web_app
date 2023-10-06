<?php

    require("validate_user.php");

    //require("validate_user.php");
    require_once("../engine/_db.php");

    $f_name     = addslashes($_REQUEST['f_name']);
    $m_name     = addslashes($_REQUEST['m_name']);
    $l_name     = addslashes($_REQUEST['l_name']);
    $gender     = addslashes($_REQUEST['gender']);
    $dob        = addslashes($_REQUEST['dob']);
    $nic        = addslashes($_REQUEST['nic']);
    $passport   = addslashes($_REQUEST['passport']);
    $mobile     = addslashes($_REQUEST['mobile']);
    // $email      = addslashes($_REQUEST['email']);
    $address    = addslashes($_REQUEST['address']);
    $city       = addslashes($_REQUEST['city']);

    $user_id = $_SESSION["user_id"];

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    $sql  = "insert into customer (user_id,FirstName,MiddleName,Surname,Gender,dob,nic,PassportNo,Mobile,Email,Address,City) values(";
    $sql .= "'$user_id',";
    $sql .= "'$f_name',";
    $sql .= "'$m_name',";
    $sql .= "'$l_name',";
    $sql .= "'$gender',";
    $sql .= "'$dob',";
    $sql .= "'$nic',";
    $sql .= "'$passport',";
    $sql .= "$mobile,";
    $sql .= "'$user_id',";
    $sql .= "'$address',";
    $sql .= "'$city')";

    // echo "<pre>";
    // echo $sql;

    if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location: http://localhost/websites/micro_finance_web_app/user/dashboard.php');
    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();
    
?>