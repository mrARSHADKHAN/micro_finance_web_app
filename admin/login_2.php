<?php 
  //start a session
  session_start();

  //connect to databse
  require_once("../engine/_db.php");

  $user_id     = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];

  $sql = "select * from tbl_users where email='$user_id'";
  $sr = $con->query($sql);

  if(mysqli_num_rows($sr)>0){
    $row = mysqli_fetch_assoc($sr);

    if($row['password'] == crypt($access_code,$row['password'])){

      $_SESSION['user_id']   = $user_id;
      $_SESSION['user_role'] = $row['role'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];

      header("location:dashboard.php");
    }
    else{
      // invalid logging
      header("location:invalid_log.php");
    }
  }
  else{
    // no user found
    header("location:oops.php");
  }
 
?>