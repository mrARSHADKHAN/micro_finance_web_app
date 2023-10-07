<?php
    include("includes/header.php");
    include("includes/topbar.php");
    include("includes/sidebar.php");

    //require("validate_user.php");
    require_once("../engine/_db.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../default.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../admin/assets/img/user-default.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo "$fname $lname" ?></h3>

                <p class="text-muted text-center"><?php echo $user_id ?></p>

                <?php include("ratings.php");?>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Your Rating</b> <a class="float-right"><?php echo ceil($rating) ?> / 10</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <?php 
                  $sql = "SELECT * FROM customer WHERE user_id='$user_id'";
                  $result = $con->query($sql);

                  if ($result->num_rows == 1) {
                      $row = $result->fetch_assoc();
              ?>

                <strong>NIC Number</strong>

                <p class="text-muted">
                <?php echo $row['nic'] ?>
                </p>

                <hr>

                <strong>Address</strong>

                <p class="text-muted"> <?php echo $row['Address'] ?></p>

                <hr>

                <strong>City</strong>

                <p class="text-muted">
                  <span class="tag tag-danger"><?php echo $row['City'] ?> </span>
                </p>

                <hr>

                <strong>Date of Birth</strong>

                <p class="text-muted"><?php echo $row['dob'] ?></p>
              </div>
              <!-- /.card-body -->

            <?php
                }
                else {
                    echo ('Complete your personal details 
                    <br />
                    <a style="margin-top: 30px;" href="customer_reg.php" class="btn btn-warning btn-block">Go to Add Customer Details</a>');
                }
            ?>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   


  </div>
  <!-- /.content-wrapper -->



<?php
  include("includes/footer.php");
?>