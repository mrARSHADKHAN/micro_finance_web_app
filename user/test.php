<?php
// generate the reference number for loans
$currentDate = date("Ymd");
$currentTime = date("His");
$randomNumber = mt_rand(100, 999);

$loan_ref_num = $currentDate . $currentTime . $randomNumber;

echo "Generated Unique Number: $loan_ref_num";

?>