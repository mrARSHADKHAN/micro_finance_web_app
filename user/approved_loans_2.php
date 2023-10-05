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
            <h1 class="m-0">Approved Loans</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Loans</a></li>
              <li class="breadcrumb-item active">Approved Loans</li>
              <li class="breadcrumb-item active">Loan 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

        <?php
            require_once("../engine/_db.php");

            $loan_ref_num = $_REQUEST['loan_ref_num'];

            $sql = "SELECT * FROM approved_loans WHERE loan_ref_num='$loan_ref_num'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>


            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                    <!-- <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span> -->

                    <div class="info-box-content">
                        <span class="info-box-text">Reference No. :</span>
                        <span class="info-box-number">
                        <?php echo $loan_ref_num ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                    <!-- <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span> -->

                    <div class="info-box-content">
                        <span class="info-box-text">Approved On :</span>
                        <span class="info-box-number"><?php echo $row['date_approved'] ?></span>
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
                    <!-- <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span> -->

                    <div class="info-box-content">
                        <span class="info-box-text">Installment Plan :</span>
                        <span class="info-box-number"><?php echo $row['installments'] ?> Months</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                    <!-- <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span> -->

                    <div class="info-box-content">
                        <span class="info-box-text">Due Date :</span>
                        <span class="info-box-number"><?php echo $row['due_date'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


            <div class="card card-outline">
                <div class="card-header">
                    <div class="row">
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                        <h5 class="description-header">Rs. <?php echo $row['loan_amt'] ?></h5>
                        <span class="description-text">LOAN AMOUNT</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right text-danger" >
                        <h5 class="description-header">Rs. <?php echo $row['due'] ?></h5>
                        <span class="description-text">DUE AMOUNT</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                        <div class="description-block border-right text-success">
                        <h5 class="description-header">Rs. <?php echo $row['paid'] ?></h5>
                        <span class="description-text">PAID AMOUNT</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                        <div class="description-block">
                        <?php
                            echo "<form method='POST' action='approved_loans_3.php'>";
                            echo "<input type='hidden' name='loan_ref_num' value='{$row['loan_ref_num']}'>";
                            echo "<button type='submit' class='btn btn-block bg-gradient-warning font-weight-bold'>Pay Now</button>";
                            echo "</form></p>";
                        ?>
                        <!-- <button type="button" class="btn btn-block bg-gradient-warning font-weight-bold">Pay Now</button> -->
                        <!-- <a href="#" class="btn btn-block bg-gradient-warning font-weight-bold">Pay Now</a> -->
                        </div>
                        <!-- /.description-block -->
                    </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-header -->
            </div>


            <?php 
                
                $t_amt    = $row['loan_amt'];
                $paid_amt = $row['paid'];

                // Calculate the percentage
                $percentage = ($paid_amt / $t_amt) * 100;
             
            ?>

            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                                    value="<?php echo $percentage ?>" data-width="250" data-height="250" data-fgColor="#009933" data-readonly="true">

                                    <div class="knob-label"><strong>Payment Progress (%)</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php       
                }
            else{
                    echo "error check, try again later";
                }
            ?>


                <div class="col-7">
                    <div class="card">
                        <!-- <div class="card-header border-0">
                            <h3 class="card-title">Products</h3>
                        </div> -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Sales</th>
                                <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                <img src="" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Some Product
                                </td>
                                <td>$13 USD</td>
                                <td>
                                <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    12%
                                </small>
                                12,000 Sold
                                </td>
                                <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <img src="" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Another Product
                                </td>
                                <td>$29 USD</td>
                                <td>
                                <small class="text-warning mr-1">
                                    <i class="fas fa-arrow-down"></i>
                                    0.5%
                                </small>
                                123,234 Sold
                                </td>
                                <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <img src="" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Amazing Product
                                </td>
                                <td>$1,230 USD</td>
                                <td>
                                <small class="text-danger mr-1">
                                    <i class="fas fa-arrow-down"></i>
                                    3%
                                </small>
                                198 Sold
                                </td>
                                <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <img src="" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Perfect Item
                                <span class="badge bg-danger">NEW</span>
                                </td>
                                <td>$199 USD</td>
                                <td>
                                <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    63%
                                </small>
                                87 Sold
                                </td>
                                <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            





        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->



<?php
  include("includes/footer.php");
?>