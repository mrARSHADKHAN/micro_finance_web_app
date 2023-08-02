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
                        <div class="card-body">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" name="" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="" class="form-control" placeholder="">
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                            <label class="custom-control-label">I agree to the <a href="#">terms & conditions</a>.</label>
                            </div>
                        </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-success float-right">Submit</button>
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