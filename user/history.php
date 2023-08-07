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
            <h1 class="m-0">History</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Loans</a></li>
              <li class="breadcrumb-item active">History</li>
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
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 20%">
                              Loan Type
                          </th>
                          <th style="width: 30%">
                              Team Members
                          </th>
                          <th>
                              Project Progress
                          </th>
                          <th style="width: 8%" class="text-center">
                              Status
                          </th>
                          <th style="width: 20%">
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              #
                          </td>
                          <td>
                              <a>
                                  Personal Loan
                              </a>
                              <br/>
                              <small>
                                  Created 01.01.2023
                              </small>
                          </td>
                          <td>
                              <ul class="list-inline">
                                  <li class="list-inline-item">
                                      <img alt="Avatar" class="table-avatar" src="../admin/assets/img/avatar.png">
                                  </li>
                                  <li class="list-inline-item">
                                      <img alt="Avatar" class="table-avatar" src="../admin/assets/img/avatar2.png">
                                  </li>
                                  <li class="list-inline-item">
                                      <img alt="Avatar" class="table-avatar" src="../admin/assets/img/avatar3.png">
                                  </li>
                                  <li class="list-inline-item">
                                      <img alt="Avatar" class="table-avatar" src="../admin/assets/img/avatar4.png">
                                  </li>
                              </ul>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                  </div>
                              </div>
                              <small>
                                  50% Complete
                              </small>
                          </td>
                          <td class="project-state">
                              <span class="badge badge-success">Success</span>
                          </td>
                          <td class="project-actions text-right">
                              <a class="btn btn-warning btn-sm" href="#">
                                  <i class="fas fa-eye">
                                  </i>
                                  
                              </a>
                              <a class="btn btn-success btn-sm" href="#">
                                  <i class="fas fa-credit-card">
                                  </i>
                                  
                              </a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              #
                          </td>
                          <td>
                              <a>
                                  Business Loan
                              </a>
                              <br/>
                              <small>
                                  Created 01.01.2023
                              </small>
                          </td>
                          <td>
                              <ul class="list-inline">
                                  <li class="list-inline-item">
                                      <img alt="Avatar" class="table-avatar" src="../admin/assets/img/avatar.png">
                                  </li>
                                  <li class="list-inline-item">
                                      <img alt="Avatar" class="table-avatar" src="../admin/assets/img/avatar2.png">
                                  </li>
                              </ul>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                  </div>
                              </div>
                              <small>
                                  47% Complete
                              </small>
                          </td>
                          <td class="project-state">
                              <span class="badge badge-success">Success</span>
                          </td>
                          <td class="project-actions text-right">
                              <a class="btn btn-warning btn-sm" href="#">
                                  <i class="fas fa-eye">
                                  </i>
                                  View
                              </a>
                              <a class="btn btn-success btn-sm" href="#">
                                  <i class="fas fa-credit-card">
                                  </i>
                                  Pay
                              </a>
                          </td>
                      </tr>
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