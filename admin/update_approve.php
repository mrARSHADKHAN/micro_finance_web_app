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

    // SQL query to update the status
    $sql = "UPDATE loan SET approve = $newStatus WHERE loan_ref_num = '$loan_ref_num'";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        header("location:loan_request.php");
    } else {
        echo "Error updating status: " . $con->error;
    }
}

// Close the database connection
$con->close();
?>
