<?php

    require("validate_user.php");

    //require("validate_user.php");
    require_once("../engine/_db.php");

    $bnk_name    = addslashes($_REQUEST['bnk_name']);
    $holder_name = addslashes($_REQUEST['holder_name']);
    $card_num    = crypt($_REQUEST['card_num'],$_REQUEST['cvv']);
    $card_typ    = addslashes($_REQUEST['card_typ']);
    $exp_month   = addslashes($_REQUEST['exp_month']);
    $exp_year    = addslashes($_REQUEST['exp_year']);
    $cvv         = addslashes($_REQUEST['cvv']);

    $user_id = $_SESSION["user_id"];

    $get_num = addslashes($_REQUEST['card_num']);
    $show_digit = preg_replace("/[^0-9]/", "", $get_num);
    $last_digit = substr($show_digit, -4);


    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    // echo $user_id;

    $sql  = "insert into card (user_id,bnk_name,holder_name,card_num,card_typ,exp_month,exp_year,cvv,last_digit,status) values(";
    $sql .= "'$user_id',";
    $sql .= "'$bnk_name',";
    $sql .= "'$holder_name',";
    $sql .= "'$card_num',";
    $sql .= "'$card_typ',";
    $sql .= "$exp_month,";
    $sql .= "$exp_year,";
    $sql .= "'$cvv',";
    $sql .= "$last_digit,";
    $sql .= "1)";

    // echo "<pre>";
    // echo $sql;

    if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location: http://localhost/websites/micro_finance_web_app/user/cards.php');
    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();
    
?>