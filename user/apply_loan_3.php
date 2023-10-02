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
            <h1 class="m-0">Apply for New Loan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Loans</a></li>
              <li class="breadcrumb-item active">Apply for new Loan</li>
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
                    <!-- jquery validation -->
                    <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> Loan Application</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" method="POST" action="apply_loan_sql.php">
                        <div class="row">
                            <div class="card-body">
                                <div class="callout callout-success">
                                    <h5 style="margin-bottom:33px;">Submission Successful!</h5>
                                    <p>  
                                        Your loan application has been successfully submitted. Please await approval from the administrator.
                                    </p>
                                    <p>
                                        Your Loan Reference Number : <strong><?php echo $_SESSION['loan_ref_num'] ?> </strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
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