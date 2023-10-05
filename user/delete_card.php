<?php

    session_start();

    //require("validate_user.php");
    require_once("../engine/_db.php");

    $card_id     = addslashes($_REQUEST['card_id']);
    $user_id = $_SESSION["user_id"];


    $sql = "DELETE FROM card WHERE card_id = $card_id";

    if ($con->query($sql) === TRUE) {
        header('Location: http://localhost/websites/micro_finance_web_app/user/cards.php');
    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();


?>