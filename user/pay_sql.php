<?php

    require("validate_user.php");
    require_once("../engine/_db.php");

    //loan table
    $user_id      = addslashes($_REQUEST['user_id']);
    $loan_ref_num = addslashes($_REQUEST['loan_ref_num']);
    $Current_ins  = addslashes($_REQUEST['Current_ins']);
    $due_date     = addslashes($_REQUEST['due_date']);
    $date_paid    = addslashes($_REQUEST['date_paid']);
    $paid_amt     = addslashes($_REQUEST['paid_amt']);
    $balance_amt  = addslashes($_REQUEST['balance_amt']);
    $Current_paid = addslashes($_REQUEST['Current_paid']);

    $tot_paid     = $Current_paid + $paid_amt;

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";


    // update the approved loan table
    $sql  = "UPDATE approved_loans set ";
    $sql .= "paid='$tot_paid',";
    $sql .= "ins_date='$due_date',";
    $sql .= "ins_paid='$Current_ins',";
    $sql .= "due='$balance_amt' WHERE user_id='$user_id' AND loan_ref_num='$loan_ref_num'";

    if ($con->query($sql) === TRUE) {

        $sql2  = "insert into payments (user_id,loan_ref_num,Current_ins,due_date,date_paid,paid_amt,balance_amt) values(";
        $sql2 .= "'$user_id',";
        $sql2 .= "'$loan_ref_num',";
        $sql2 .= "$Current_ins,";
        $sql2 .= "'$due_date',";
        $sql2 .= "'$date_paid',";
        $sql2 .= "'$paid_amt',";
        $sql2 .= "'$balance_amt')";

        if ($con->query($sql2) === TRUE) {
            // echo "New record created successfully";
            header('Location: http://localhost/websites/micro_finance_web_app/user/pay_sql_2.php');
        } else {
            echo ("Error : " . $SQL . "<br>" . $con->error);
        }

        
    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();

?>