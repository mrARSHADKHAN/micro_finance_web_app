<?php
//capture the data
if ($_POST['password'] == $_POST['passwordV']) {
    require_once("_db.php");
    $SQL = "INSERT INTO `tbl_users`(`UID`, `fname`, `lname`, `email`, `password`, `Joining`, `status`)
        VALUES (NULL, '" . $_POST['fname'] . "', '" . $_POST['lname'] . "', '" . $_POST['email'] . "', '" .($_POST['password']) . "',TIMESTAMP('" . date("Y-m-d", time()) . "'),'1')";

    if ($con->query($SQL) === TRUE) {
        echo "New record created successfully";
        header('Location: http://localhost/');
    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();
} else {
    echo 'Password do not match';
    header('location:javascript://history.go(-1)');
}

    //record data
    //handle error
