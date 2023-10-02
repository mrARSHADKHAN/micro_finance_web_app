<?php

//start a session
session_start();

//capture the data
$email = $_POST['email'];

if ($_POST['password'] == $_POST['passwordV']) {
    require_once("_db.php");

    //check for username
    $sql2 = "select * from tbl_users where email='$email'"; 
    $result = $con->query($sql2);

    if(($result->num_rows) > 0){
        // echo 'user alredy exits';
        header('Location: http://localhost/websites/micro_finance_web_app/?status=user_exit');
    }
    else{
        $SQL = "INSERT INTO `tbl_users`(`UID`, `fname`, `lname`, `email`, `password`, `Joining`, `status`)
        VALUES (NULL, '" . $_POST['fname'] . "', '" . $_POST['lname'] . "', '" . $_POST['email'] . "', '" .($_POST['password']) . "',TIMESTAMP('" . date("Y-m-d", time()) . "'),'1')";

        if ($con->query($SQL) === TRUE) {
            //echo "New record created successfully";

            $_SESSION['user_id']   = $email;
            $_SESSION['fname'] = $_POST['fname'];
            $_SESSION['lname'] = $_POST['lname'];

            header('Location: http://localhost/websites/micro_finance_web_app/user/customer_reg.php');
        } else {
            echo ("Error : " . $SQL . "<br>" . $con->error);
        }
        $con->close();
    }


} else {
    echo 'Password do not match';
    // header('location:javascript://history.go(-1)');
}

