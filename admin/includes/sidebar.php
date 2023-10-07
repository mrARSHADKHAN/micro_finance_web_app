<?php
require_once("../engine/_db.php");

$sql = "SELECT * FROM loan WHERE approve='0'";
$sr = $con->query($sql);
$loan_req = mysqli_num_rows($sr);


?>
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MicroFapp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/user-default.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $lname ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-danger right"><?php echo $loan_req ?></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cus_list.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Customer List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="loan_request.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Loan Requests</p>
                  <span class="badge badge-danger right"><?php echo $loan_req ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="history.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="approved_loans.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Approved Loans</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rejected_loans.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Rejected Loans</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Payments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="loan_payments.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Loan Payments</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Pay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Manage Payments</p>
                </a>
              </li> -->
              
            </ul>
          </li> 

          <li class="nav-header">Help</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Support
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="faq.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>FAQs</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="contact_us.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Help</p>
                </a>
              </li> -->
              
            </ul>
          </li>

          <li class="nav-header">Accounts</li>
          <li class="nav-item">
            <a href="users.php" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <i class="fas fa-lock nav-icon"></i>
              <p>
                Add Admins
              </p>
            </a>
          </li>

          <li class="nav-header">Manage</li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item" onclick="return confirm('Are you sure you want to logout?')">
            <a href="../engine/logoffuser.php" class="nav-link">
              <i class="fas fa-power-off nav-icon"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
