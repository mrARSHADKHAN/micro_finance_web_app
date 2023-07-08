<?php
require_once("_db.php"); 
  //copy the $_REQUEST array data to variables
/*   if (isset($_SESSION['uid'])){ */
    $first_name       = addslashes($_REQUEST['first_name']);
    $last_name = addslashes($_REQUEST['last_name']);
    $phone = addslashes($_REQUEST['phone']);
    $user_id = addslashes($_REQUEST['user_id']);
    $comments = addslashes($_REQUEST['comments']);

  //build and SQL command dynamically

    $sql = "INSERT INTO contact (first_name,last_name,phone,user_id,comments) VALUES(";
    $sql.= "'$first_name',";
    $sql.= "'$last_name',";
    $sql.= "'$phone',";
    $sql.= "'$user_id',";
    $sql.= "'$comments')";

  //execute the SQL command in PHP
  
  if ($con->query($sql) === TRUE) {

    header('Location:http://localhost/?page=pages/Contact%20Us.php');
  } else {
    echo "Error" . $con->error;
  
  }
/* }else{
  header('Location: http://localhost/engine/_modal_login.php');
} */

?>
