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

    <section class="content">
      <div class="container-fluid">
        
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Loans List</h3>

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
                          <th style="width: 15%">
                              Reference No.
                          </th>
                          <th style="width: 20%">
                              Loan Type
                          </th>
                          <th style="width: 20%">
                              Loan Amount
                          </th>
                          <th>
                              Payment Progress
                          </th>
                          <th style="width: 8%" class="text-center">
                              Status
                          </th>
                          <th style="width: 20%">
                          </th>
                        </tr>
                  </thead>
                  <tbody>

                        <?php
                            require_once("../engine/_db.php");

                            $user_id = $_SESSION['user_id'];

                            $sql = "SELECT * FROM loan WHERE user_id='$user_id' AND approve='1'";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['loan_ref_num'] ?>
                                        </td>
                                        <td>
                                            <a><?php echo $row['loan_typ'] ?></a>
                                            <br/>
                                            <small>Date : <?php echo $row['loan_date'] ?></small>
                                        </td>
                                        <td>
                                            <a>Rs. <?php echo $row['loan_amt'] ?></a>
                                        </td>
                                        <td class="project_progress">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo $row['percent'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['percent'] ?>%">
                                                </div>
                                            </div>
                                            <small>
                                            <?php echo $row['percent'] ?>% Complete
                                            </small>
                                        </td>
                                        <td class="project-state">
                                            <?php
                                                $status = intval($row['approve']);
                                                if ($status === 0) {
                                                    echo '<span class="badge badge-warning">Pending</span>';
                                                } elseif ($status === 1) {
                                                    echo '<span class="badge badge-success">Approved</span>';
                                                } elseif ($status === 2) {
                                                    echo '<span class="badge badge-danger">Rejected</span>';
                                                }
                                            ?>
                                        </td>
                                        <td class="project-actions text-right">
                                            <?php
                                                echo "<form method='POST' action='approved_loans_2.php'>";
                                                echo "<input type='hidden' name='loan_ref_num' value='{$row['loan_ref_num']}'>";
                                                echo "<button type='submit' name='setStatus' value='1' class='btn btn-warning btn-sm' style='margin-right: 5px' ><i class='fas fa-eye' style='margin-right: 5px'></i>View</button>";
                                               // echo "<button type='submit' name='setStatus' value='2' class='btn btn-danger btn-sm'><i class='fas fa-credit-card' style='margin-right: 5px'></i>Pay</button>";
                                                echo "</form></p>";
                                            ?>
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