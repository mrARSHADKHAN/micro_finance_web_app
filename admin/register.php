<?php
  include("includes/header.php");
  include("includes/topbar.php");
  include("includes/sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active">Add Admins</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        
      <div class="row">
            <div class="col-12">
                <div class="register-box" style="margin: auto;">
                    <div class="register-logo">
                        <a href="#"><b>Admin</b>Register</a>
                    </div>

                    <div class="card">
                        <div class="card-body register-card-body">
                        <p class="login-box-msg">Add a new Admin</p>

                        <form action="register_2.php" method="POST">
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" name="fname" placeholder="First name" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" name="lname" placeholder="Last name" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="email" class="form-control" name="user_id" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="password" class="form-control" name="access_code" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="password" class="form-control" name="access_code_v" placeholder="Retype password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Add Admin</button>
                            </div>
                            <!-- /.col -->
                            </div>
                        </form>
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
                </div>
                <!-- /.register-box -->
            </div>
            <!--/.col-->
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