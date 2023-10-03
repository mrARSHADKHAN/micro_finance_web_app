<?php

require("validate_user.php");

//connect to databse
require_once("../engine/_db.php");

// Check if the form is submitted
if (isset($_REQUEST['setStatus'])) {
    // Get the ID of the record and the status to be set
    $loan_ref_num = $_REQUEST['loan_ref_num'];
    $newStatus = $_REQUEST['setStatus'];

    // echo $loan_ref_num , $newStatus ;

    if($newStatus == 1){
        echo $newStatus;

        $sql2 = "SELECT * FROM loan WHERE loan_ref_num='$loan_ref_num'";

        echo $sql2;

        $result = $con->query($sql2);

            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);

                $user_id      = $row['user_id'];
                $loan_amt     = $row['loan_amt'];
                $loan_typ     = $row['loan_typ'];
                $installments = $row['plan'];

                $date_approved = date('Y-m-d');

                // Convert the string date to a DateTime object
                $dateTime = new DateTime($date_approved);
                // Add the number of installments as months to the date
                $dateTime->add(new DateInterval("P{$installments}M"));
                // Format the resulting date as a string
                $due_date = $dateTime->format('Y-m-d');
                
                $sql3  = "insert into approved_loans (user_id,loan_ref_num,loan_amt,loan_typ,installments,due,date_approved,due_date) values(";
                $sql3 .= "'$user_id',";
                $sql3 .= "'$loan_ref_num',";
                $sql3 .= "$loan_amt,";
                $sql3 .= "'$loan_typ',";
                $sql3 .= "$installments,";
                $sql3 .= "$loan_amt,";
                $sql3 .= "'$date_approved',";
                $sql3 .= "'$due_date')";

                // echo $sql3;

                if ($con->query($sql3) === TRUE) {
                    
                        // SQL query to update the status
                        $sql = "UPDATE loan SET approve = $newStatus WHERE loan_ref_num = '$loan_ref_num'";

                        // Execute the query
                        if ($con->query($sql) === TRUE) {
                            header("location:loan_request.php");
                        } else {
                            echo "Error updating status: " . $con->error;
                        }

                } else {
                    echo "Error updating status: " . $con->error;
                }
            }
            else {

            }


    }
}

// Close the database connection
$con->close();
?>
