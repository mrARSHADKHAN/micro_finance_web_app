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
            <h1 class="m-0">Loan Payments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Payments</a></li>
              <li class="breadcrumb-item active">Loan Payments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button> -->
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                        <tr>
                          <th style="width: 20%">
                              Reference No.
                          </th>
                          <th style="width: 20%">
                              User ID
                          </th>
                          <th style="width: 20%">
                              Paid
                          </th>
                          <th style="width: 20%">
                              Balance
                          </th>
                          <th style="width: 20%">
                              Date
                          </th>
                          <th style="width: 20%" class="text-center">
                              Installment
                          </th>
                        </tr>
                  </thead>
                  <tbody>

                        <?php
                            require_once("../engine/_db.php");

                            $sql = "SELECT * FROM payments";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['loan_ref_num'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['user_id'] ?>
                                        </td>
                                        <td>
                                            <a>Rs. <?php echo $row['paid_amt'] ?></a>
                                        </td>
                                        <td>
                                            <a>Rs. <?php echo max(0, $row['balance_amt']) ?></a>
                                        </td>
                                        <td class="project_progress">
                                            <?php echo $row['due_date'] ?>
                                        </td>
                                        <td class="project-state">
                                            <?php echo $row['current_ins'] ?>
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->



<?php
  include("includes/footer.php");
?>