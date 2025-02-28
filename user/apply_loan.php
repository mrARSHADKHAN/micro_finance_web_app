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
                                <div class="callout callout-danger">
                                    <h5>For your information!</h5>
                                    <p>
                                        To proceed, kindly ensure that all information provided is accurate and up-to-date.
                                        <br /> 
                                        To expedite your application, please double-check and ensure that all details provided are correct. And 
                                        for the best results, please make sure that the information you provide is accurate and current.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ./row -->
                        <div class="row">
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Loan Type</label>
                                        <select name="loan_typ" class="form-control">
                                            <option>Vehicle Loan</option>
                                            <option>Housing Loan</option>
                                            <option>Business Loan</option>
                                            <option>Personal Loan</option>
                                        </select>
                                    </div>
                                  <div class="form-group">
                                      <label>Installment Plan (Month)</label>
                                        <select name="plan" class="form-control">
                                            <option>6</option>
                                            <option>12</option>
                                            <option>18</option>
                                            <option>24</option>
                                            <option>30</option>
                                            <option>36</option>
                                        </select>
                                  </div>
                              </div>
                              <!-- /.card-body -->  
                            </div>
                            <!-- ./col-4 -->
                            <div class="col-4">
                                <div class="card-body">
                                  <div class="form-group">
                                      <label>Loan Amount</label>
                                      <input type="number" name="loan_amt" class="form-control" placeholder="" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Loan Purpose</label>
                                      <input type="text" name="purpose" class="form-control" placeholder="" required>
                                  </div>
                                  
                              </div>
                              <!-- /.card-body -->  
                            </div>
                            <!-- ./col-4 -->
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="callout callout-danger">
                                      <h5>For your information!</h5>

                                      <p>
                                        Tell us about your loan requirements,
                                          <br /> 
                                          and the purpose of the loan.
                                      </p>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col-4 -->
                        </div>
                        <!-- end of row -->

                        
                        <!-- Bank Section -->
                        <!-- ----------------- -->

                        <div class="card-header" style="padding-bottom: 0px;">
                        </div>
                        <div class="card-body" style="padding-bottom: 0px;">
                          <label style="color: grey;">Bank Details</label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Bank Name</label>
                                        <input type="text" name="bnk_name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Account Type</label>
                                        <select name="acc_typ" class="form-control">
                                            <option>Savings Account</option>
                                            <option>Current Account</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Account Number</label>
                                        <input type="number" name="acc_num" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col-->
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Branch</label>
                                        <input type="text" name="branch" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>

                        <!-- Gurentar Section -->
                        <!-- ----------------- -->

                        <div class="card-header" style="padding-bottom: 0px;">
                        </div>
                        <div class="card-body" style="padding-bottom: 0px;">
                          <label style="color: grey;">Guranter Details</label>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="full_name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>NIC</label>
                                        <input type="text" name="nic" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col-->
                            <div class="col-3">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Contact No.</label>
                                        <input type="number" name="contact" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Employment</label>
                                        <input type="text" name="employment" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            
                        </div>
                        <!-- ./ row -->

                        <!-- ./ row -->
                        <div class="row">
                          <div class="col-12">
                              <div class="card-body">
                                  <div class="form-group mb-0">
                                      <div class="icheck-primary">
                                          <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                          <label for="agreeTerms">
                                          I agree to the <a href="terms_condition.php">terms & conditions</a>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info float-right">Submit</button>
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