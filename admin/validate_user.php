<?php
  session_start();
  //check whether the user has logged in or not
  if(count($_SESSION)<=0){
    //not logged in;
    header("location:invalid_log.php");
  }
  else{
    if(($_SESSION['user_role'] != 'admin')){
      header("location:invalid_log.php");
    }
  }
?>
