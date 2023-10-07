<?php 
    require("validate_user.php");

    require_once("../engine/_db.php");

    $user_id        = $_REQUEST['user_id'];
    $fname          = $_REQUEST['fname'];
    $lname          = $_REQUEST['lname'];
    $access_code    = crypt($_REQUEST['access_code'],$_REQUEST['access_code']);
    $access_code_v  = crypt($_REQUEST['access_code_v'],$_REQUEST['access_code_v']);

    $reg_date = date('Y-m-d');

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    //checks for passoword match
    if($access_code == $access_code_v){
    
    $sql2 = "select * from tbl_users where email='$user_id'"; 
    $sr = $con->query($sql2);

    // //check for username
    if(mysqli_num_rows($sr)>0){
        echo "alredy user exits";
        // header("location:register_3.php?status=user_exit");
    }
    else{

        $sql  = "insert into tbl_users (email,fname,lname,Joining,role,status,password) values(";
        $sql .= "'$user_id',";
        $sql .= "'$fname',";
        $sql .= "'$lname',";
        $sql .= "'$reg_date',";
        $sql .= "'admin',";
        $sql .= "'1',";
        $sql .= "'$access_code')";

        $rs = $con->query($sql);

        if($rs>0){
            header("location:dashboard.php");
        }
        else{
            header("location:oops.php");
            }
        }
    }
    else{
        // echo "Password not matching";
        header("location:oops.php");
    }
?>