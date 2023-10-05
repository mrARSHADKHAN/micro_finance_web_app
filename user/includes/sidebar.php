  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="../" class="brand-link">
      <img src="../admin/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MicroFapp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/assets/img/user-default.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $lname ?></a>
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
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Loans
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="approved_loans.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Approved Loans</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="history.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="apply_loan.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Apply for new Loan</p>
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
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Loan Payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Pay</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="cards.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Manage Payments</p>
                </a>
              </li>
              
            </ul>
          </li>

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
              <li class="nav-item">
                <a href="contact_us.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="terms_condition.php" class="nav-link">
                  <i class="far fa-fw nav-icon"></i>
                  <p>Terms & conditions</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-header">Tools</li>

          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
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
