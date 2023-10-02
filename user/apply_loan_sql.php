<?php

    session_start();

    //require("validate_user.php");
    require_once("../engine/_db.php");

    //loan table
    $loan_typ     = addslashes($_REQUEST['loan_typ']);
    $plan         = addslashes($_REQUEST['plan']);
    $loan_amt     = addslashes($_REQUEST['loan_amt']);
    $purpose      = addslashes($_REQUEST['purpose']);

    // bank table
    $bnk_name     = addslashes($_REQUEST['bnk_name']);
    $acc_typ      = addslashes($_REQUEST['acc_typ']);
    $acc_num      = addslashes($_REQUEST['acc_num']);
    $branch       = addslashes($_REQUEST['branch']);

    $full_name    = addslashes($_REQUEST['full_name']);
    $address      = addslashes($_REQUEST['address']);
    $nic          = addslashes($_REQUEST['nic']);
    $email        = addslashes($_REQUEST['email']);
    $contact      = addslashes($_REQUEST['contact']);
    $employment   = addslashes($_REQUEST['employment']);

    $user_id = $_SESSION["user_id"];

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    
    // generate the reference number for loans
    $reference_number = substr($loan_typ, 0, 2);
    $reference_number = strtoupper($reference_number);    // Optionally, you can convert the letters to uppercase if needed
    $randomNumber1 = mt_rand(1000, 9999);
    $randomNumber2 = mt_rand(1000, 9999);
    $randomNumber3 = mt_rand(1000, 9999);

    $loan_ref_num = $reference_number . $randomNumber1 . $randomNumber2 . $randomNumber3;


    $_SESSION["loan_ref_num"] = $loan_ref_num;
    

    $sql1  = "insert into loan (loan_ref_num,user_id,loan_typ,plan,loan_amt,purpose) values(";
    $sql1 .= "'$loan_ref_num',";
    $sql1 .= "'$user_id',";
    $sql1 .= "'$loan_typ',";
    $sql1 .= "'$plan',";
    $sql1 .= "$loan_amt,";
    $sql1 .= "'$purpose')";

    if ($con->query($sql1) === TRUE) {

        $sql2  = "insert into bank_info (loan_ref_num,user_id,bnk_name,acc_typ,acc_num,branch) values(";
        $sql2 .= "'$loan_ref_num',";
        $sql2 .= "'$user_id',";
        $sql2 .= "'$bnk_name',";
        $sql2 .= "'$acc_typ',";
        $sql2 .= "$acc_num,";
        $sql2 .= "'$branch')";

        if ($con->query($sql2) === TRUE) {

            $sql3  = "insert into guarantor (loan_ref_num,user_id,full_name,address,nic,email,contact,employment) values(";
            $sql3 .= "'$loan_ref_num',";
            $sql3 .= "'$user_id',";
            $sql3 .= "'$full_name',";
            $sql3 .= "'$address',";
            $sql3 .= "'$nic',";
            $sql3 .= "'$email',";
            $sql3 .= "'$contact',";
            $sql3 .= "'$employment')";
            
            if ($con->query($sql3) === TRUE) {

                // echo "New record created successfully";
                header('Location: http://localhost/websites/micro_finance_web_app/user/apply_loan_3.php');

            } else {
                echo ("Error : " . $SQL . "<br>" . $con->error);
            }    

        } else {
            echo ("Error : " . $SQL . "<br>" . $con->error);
        }

    } else {
        echo ("Error : " . $SQL . "<br>" . $con->error);
    }
    $con->close();


?>