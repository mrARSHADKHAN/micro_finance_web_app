<?php
// Your variable with spaces and numbers
$variable = "023 7 2343 234 324 234 3";

// Remove spaces and get only the numbers
$numbers = preg_replace("/[^0-9]/", "", $variable);

// Get the last 4 digits
$last4Digits = substr($numbers, -4);

echo "Original Variable: $variable<br>";
echo "Numbers Only: $numbers<br>";
echo "Last 4 Digits: $last4Digits";
?>