<?php

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
    $email      = addslashes($_REQUEST['email']);
    $address    = addslashes($_REQUEST['address']);
    $city       = addslashes($_REQUEST['city']);

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    $sql  = "insert into customer (FirstName,MiddleName,Surname,Gender,dob,nic,PassportNo,Mobile,Email,Address,City) values(";
    $sql .= "'$f_name',";
    $sql .= "'$l_name',";
    $sql .= "'$l_name',";
    $sql .= "'$gender',";
    $sql .= "'$dob',";
    $sql .= "'$nic',";
    $sql .= "'$passport',";
    $sql .= "$mobile,";
    $sql .= "'$email',";
    $sql .= "'$address',";
    $sql .= "'$city')";

    // echo "<pre>";
    // echo $sql;

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        // header('Location:');
    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();

    // $x = $con->query($SQL);

    // if($x>0){
    //     echo "record added successfully";
    //     //  header("location:#");
    // }
    // else{
    //     echo "record failed ";
    // }
?>