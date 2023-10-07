<?php

$sql1 = "select * from ratings where user_id='$user_id'";
$sr1 = $con->query($sql1);

if ($sr1->num_rows > 0) {

$row1 = mysqli_fetch_assoc($sr1);
$rate = $row1['rating'];

$sql2 = "SELECT MAX(rating) AS max_rate FROM ratings";
$sr2 = $con->query($sql2);
$row2 = mysqli_fetch_assoc($sr2);
$max_rate = $row2['max_rate'];

$rating = ($rate / $max_rate) * 10;

}
else {
    $rating = '0';
}

?>