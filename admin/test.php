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