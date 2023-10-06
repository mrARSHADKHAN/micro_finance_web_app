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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../default.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Loan</h3>

                <p>Approved Loans</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="approved_loans.php" class="small-box-footer">VIEW <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Apply</h3>

                <p>New Loan</p>
              </div>
              <div class="icon">
              <i class="fas fa-hand-holding-usd"></i>
              </div>
              <a href="apply_loan.php" class="small-box-footer">VIEW <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Pay</h3>

                <p>Manage Cards</p>
              </div>
              <div class="icon">
                <i class="fab fa-cc-visa"></i>
              </div>
              <a href="cards.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Profile</h3>

                <p>Check the Profile</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-circle"></i>
              </div>
              <a href="profile.php" class="small-box-footer">VIEW <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="row">
                        <div class="card-body" style="padding: 30px 150px;">
                            <div style="text-align: center;">
                                <h5 style="margin-bottom:33px; font-size: 33px;">Welcome <?php echo $fname . ' ' . $lname ?></h5>
                                <i class="fas fa-user fa-5x text-dark" style="margin-bottom:33px;"></i>
                                <p style="font-size: 23px;">  
                                    Welcome to the Micro Finance Web Application
                                </p>
                                <p>
                                We are delighted to welcome you to <b>MicroFinApp!</b> Your dashboard is your gateway to managing and accessing all the powerful features and tools our system has to offer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
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