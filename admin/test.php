<?php

$dateApproved = date('Y-m-d');
$installments = '6';

// Convert the string date to a DateTime object
$dateTime = new DateTime($dateApproved);

echo "Installment Dates:<br>";

for ($i = 1; $i <= $installments; $i++) {
    // Add the current installment month to the date
    $dateTime->add(new DateInterval("P1M"));

    // Format and print the resulting date
    $installmentDate = $dateTime->format('Y-m-d');
    echo "Installment $i: $installmentDate<br>";
}


?>


<?php
            require_once("../engine/_db.php");

            // $sql = "SELECT SUM(amount_column) AS total_amount FROM loan";
            $sql = "SELECT * FROM loan";
            $result = $con->query($sql);

            $row = $result->num_rows;
            // $row = mysqli_fetch_assoc($result);

            echo $row;

            
?>