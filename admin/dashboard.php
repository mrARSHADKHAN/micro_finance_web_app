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
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="row">
                        <div class="card-body" style="padding: 30px 150px;">
                            <div style="text-align: center;">
                                <h5 style="margin-bottom:33px; font-size: 33px;">Welcome <?php echo $fname?>!</h5>
                                <p style="font-size: 23px;">  
                                    Admin Panel of Micro Finance Web Application
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

        <?php
            require_once("../engine/_db.php");

            $sql      = "SELECT * FROM loan";
            $r1 = $con->query($sql);
            $tot_loan = $r1->num_rows;

            $sql2      = "SELECT * FROM loan WHERE approve='1'";
            $r2 = $con->query($sql2);
            $app_loan = $r2->num_rows;

            $sql3      = "SELECT * FROM loan WHERE approve='2'";
            $r3 = $con->query($sql3);
            $rej_loan = $r3->num_rows;

            $sql4      = "SELECT * FROM loan WHERE approve='0'";
            $r4 = $con->query($sql4);
            $pen_loan = $r4->num_rows;

            $sql8      = "SELECT * FROM customer";
            $r8 = $con->query($sql8);
            $tot_cus = $r8->num_rows;
        ?>

        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>

              <div class="info-box-content">
              <a href="history.php" style="color: #000;"><span class="info-box-text">Total Loans</span></a>
                <span class="info-box-number">
                  <?php echo $tot_loan ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

              <div class="info-box-content">
              <a href="approved_loans.php" style="color: #000;"><span class="info-box-text">Loans Approved</span></a>
                <span class="info-box-number">
                  <?php echo $app_loan ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times-circle"></i></span>

              <div class="info-box-content">
                <a href="rejected_loans.php" style="color: #000;"><span class="info-box-text">Loans Rejected</span></a>
                <span class="info-box-number">
                  <?php echo $rej_loan ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="far fa-clock"></i></span>

              <div class="info-box-content">
              <a href="loan_request.php" style="color: #000;"><span class="info-box-text">Loans Pending</span></a>
                <span class="info-box-number">
                  <?php echo $pen_loan ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php
                      $sql5 = "SELECT SUM(loan_amt) AS total_loans FROM approved_loans";
                      $r5 = $con->query($sql5);

                      if ($r5->num_rows > 0) {
                          $row = mysqli_fetch_assoc($r5);
                    ?>
                          <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                              <h5 class="description-header">Rs. <?php echo number_format($row['total_loans'], 2, '.', ',') ?></h5>
                              <span class="description-text">TOTAL LOAN</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                    <?php
                        }

                      $sql6 = "SELECT SUM(paid) AS total_paid FROM approved_loans";
                      $r6 = $con->query($sql6);

                      if ($r6->num_rows > 0) {
                          $row6 = mysqli_fetch_assoc($r6);
                      ?>
                            <div class="col-sm-3 col-6">
                              <div class="description-block border-right">
                                <h5 class="description-header">Rs. <?php echo number_format($row6['total_paid'], 2, '.', ',') ?></h5>
                                <span class="description-text">TOTAL PAID</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                      <?php
                        }

                          $sql7 = "SELECT SUM(due) AS total_bal FROM approved_loans";
                          $r7 = $con->query($sql7);

                          if ($r7->num_rows > 0) {
                              $row7 = mysqli_fetch_assoc($r7);
                          ?>
                                <div class="col-sm-3 col-6">
                                  <div class="description-block border-right">
                                    <h5 class="description-header">Rs. <?php echo number_format($row7['total_bal'], 2, '.', ',') ?></h5>
                                    <span class="description-text">TOTAL BALANCE</span>
                                  </div>
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                        <?php
                          }
                        ?>
                                <div class="col-sm-3 col-6">
                                  <div class="description-block">
                                    <h5 class="description-header"><?php echo $tot_cus ?></h5>
                                    <span class="description-text">TOTAL CUSTOMERS</span>
                                  </div>
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
          </div>
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