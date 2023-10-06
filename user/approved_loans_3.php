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
            <h1 class="m-0">Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Loans</a></li>
              <li class="breadcrumb-item active">Approved Loans</li>
              <li class="breadcrumb-item active">Payment</li>
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

                //require("validate_user.php");
                require_once("../engine/_db.php");

                $loan_ref_num = addslashes($_REQUEST['loan_ref_num']);

                $sql = "select * from approved_loans where loan_ref_num='$loan_ref_num'";
                $sr = $con->query($sql);
              
                if(mysqli_num_rows($sr)>0){
                  $row = mysqli_fetch_assoc($sr);

                    $user_id = $_SESSION['user_id'];
              
                    $total_amount    = $row['loan_amt'];
                    $due             = $row['due'];
                    $Current_paid    = $row['paid'];
                    $installment     = $row['installments'];
                    $ins_date        = $row['ins_date'];
                    $Current_ins     = $row['ins_paid'] + 1;


                    $date_paid = date('Y-m-d');
                    $due_date = new DateTime($ins_date);
                    $due_date->modify('+1 month');

                    $one_installemt  = $total_amount / $installment;

                    // Round up to the nearest whole number with two decimal places
                    $rounded_amt =  ceil($one_installemt * 100) / 100;

                    // to take the card num
                    $sql2 = "select * from card where user_id='$user_id'";
                    $sr2 = $con->query($sql2);
                    $row2 = mysqli_fetch_assoc($sr2);
                    $last_digit = $row2['last_digit'];

                    $balance_amt = $due - $rounded_amt;


                ?>

            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                        <h4>
                            Installment Payment
                            <small class="float-right">Date: <?php echo $date_paid ?></small>
                        </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info" style="margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-sm-2 invoice-col">
                        <b>Reference No.</b><br>
                        <b>User ID</b><br>
                        <b>Payment Due</b><br>
                        <b>VISA Card</b>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-2 invoice-col">
                        : <?php echo $loan_ref_num ?><br>
                        : <?php echo $user_id ?><br>
                        : <?php echo $due_date->format('Y-m-d') ?><br>
                        : **** **** **** <?php echo $last_digit ?>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="../admin/assets/img/credit/visa.png" alt="Visa">
                        <!-- <img src="../admin/assets/img/credit/mastercard.png" alt="Mastercard">
                        <img src="../admin/assets/img/credit/american-express.png" alt="American Express">
                        <img src="../admin/assets/img/credit/paypal2.png" alt="Paypal"> -->

                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        We want to inform our valued customers that, at present, our accepted payment method is limited to VISA.
                        </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                        <p class="lead">Amount Due: <b><?php echo $due_date->format('Y/m/d') ?></b></p>

                        <div class="table-responsive">
                            <table class="table">
                            <tr>
                                <th style="width:50%">Installment x <?php echo $Current_ins ?> :</th>
                                <td>Rs. <?php echo $rounded_amt ?></td>
                            </tr>
                            <tr>
                                <th>Tax:</th>
                                <td>Rs. 0.00</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>Rs. <?php echo $rounded_amt ?></td>
                            </tr>
                            </table>
                        </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                        <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                        <form action="pay_sql.php" method="post">
                            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                            <input type="hidden" name="loan_ref_num" value="<?php echo $loan_ref_num ?>">
                            <input type="hidden" name="balance_amt" value="<?php echo $balance_amt ?>">
                            <input type="hidden" name="Current_ins" value="<?php echo $Current_ins ?>">
                            <input type="hidden" name="due_date" value="<?php echo $due_date->format('Y-m-d') ?>">
                            <input type="hidden" name="date_paid" value="<?php echo $date_paid ?>">
                            <input type="hidden" name="Current_paid" value="<?php echo $Current_paid ?>">
                            <button type="submit" name="paid_amt" value="<?php echo $rounded_amt ?>" class="btn btn-success float-right" onclick="return confirm('Are you sure you want to pay now?')"><i class="far fa-credit-card"></i> 
                                Pay Now
                            </button>
                        </form>
                        <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                            <i class="fas fa-download"></i> Generate PDF
                        </button> -->
                        </div>
                    </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div>
            <!-- /.row -->

                <?php
                }
                else{
                  // noloan Found
                }

            ?>

            
                
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->



<?php
  include("includes/footer.php");
?>