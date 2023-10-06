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

                $t_installment = $row['installments'];
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
                        <span class="info-box-text">Due Period :</span>
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

                            $t_amt    = $row['loan_amt'];
                            $paid_amt = $row['paid'];

                            // Calculate the percentage
                            $percentage = round(($paid_amt / $t_amt) * 100);

                            $user_id = $_SESSION['user_id'];

                            $sql2 = "SELECT * FROM card WHERE user_id='$user_id'";
                            $result2 = $con->query($sql2);

                            if ($result2->num_rows > 0) {
                                $row2 = mysqli_fetch_assoc($result2);

                                echo "<form method='POST' action='approved_loans_3.php'>";
                                echo "<input type='hidden' name='loan_ref_num' value='{$row['loan_ref_num']}'>";
                                if($paid_amt >= $t_amt){
                                    // $disabled = 'disabled';
                                    echo "<a class='btn btn-block bg-gradient-light font-weight-bold'>Loan Completed <i class='fas fa-check-circle text-success' style='margin-left:10px;'></i></a>";
                                } else {
                                    // $disabled = '';
                                    echo "<button type='submit' class='btn btn-block bg-gradient-warning font-weight-bold'>Pay Now</button>";
                                }
                                echo "</form></p>";

                            }
                            else {
                                echo "<a type='submit' href='cards.php' class='btn btn-block bg-gradient-danger font-weight-bold'>Setup Pay Method</a>";
                            }
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

            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                                    value="<?php echo $percentage ?>" data-width="250" data-height="250" data-fgColor="#009933" data-readonly="true" style="outline: none;">

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
                                        <th>ID</th>
                                        <th style="text-align: center;">Installment</th>
                                        <th>Date</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $user_id = $_SESSION['user_id'];

                                    $sql5 = "SELECT * FROM payments WHERE user_id='$user_id' AND loan_ref_num='$loan_ref_num'";
                                    $result5 = $con->query($sql5);

                                    if ($result5->num_rows > 0) {
                                        while($row5 = mysqli_fetch_assoc($result5)){
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row5['pay_id'] ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php echo $row5['current_ins'] . ' X ' . $t_installment ?>
                                        </td>
                                        <td>
                                            <?php echo $row5['date_paid'] ?>
                                        </td>
                                        <td>
                                            Rs. <?php echo $row5['paid_amt'] ?>
                                        </td>
                                        <td>
                                            Rs. <?php echo $row5['balance_amt'] ?>
                                        </td>
                                    </tr>
                            <?php
                                     }
                                    }
                                    else{
                            ?>

                                    <tr>
                                        <td colspan='7'>
                                            <h3 class="text-center">No Records Found</h3>
                                        </td>
                                    </tr>
                            <?php 
                                    }
                            ?>

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