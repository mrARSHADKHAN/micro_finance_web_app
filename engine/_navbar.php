<!-- Nav Bar -->
<link rel="stylesheet" href="style/base1.css">
<?php
$sql = "SELECT ID, test, link FROM tbl_menu";
$result = $con->query($sql);
?>

  <div class="mynav">
    <nav class="navbar navbar-light bg-light">
      <!--  <div class="container">-->
      <a class="navbar-brand" href="?page=Home.php">
        <img src="/resources/images/Default_Carousel/E-M.jpg" alt="" width="120" height="90" class="d-inline-block align-text-middle"></a>
    
        <div class="searchbar">
        <script async src="https://cse.google.com/cse.js?cx=989831cdfa5991d4b"></script>
        <div class="gcse-search"></div>
        </div>
        </div>
    
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form> 
    </div> -->
    
    

  </div>
  </nav>

  <div class="mynav1">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">


      <!--  <div class="container">-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Showing Pages -->
          <?php
          $pages = glob('pages/*.php', GLOB_BRACE);
          foreach ($pages as $page) {

            echo '<li class="nav-item">';
            echo '<a class="nav-link active" aria-current="page" href="?page=' . $page . '">' . str_replace('.php', '', (str_replace('pages/', '', $page))) . '</a>';
            echo '</li>';
          }

          ?>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Product Registry</a>
            <ul class="dropdown-menu">


              <!-- Product Register, Update, Delete -->
              <?php
              echo '<li><a class="dropdown-divider"></li>';


              if (isset($_SESSION['uid'])) {
                echo '<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#mdl_regproduct">Register Product</a></li>';
                echo '<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#update_product">Update Product</a></li>';
                echo '<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#product_delete">Delete Product</a></li>';
                
              } else {
                echo '<li> <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#_modal_login">Login to continue</a></li>';
              }
              ?>
              <!-- Product Register, Update, Delete END-->
            </ul>
          </li>
          <!-- Login, Logout, Register -->
          <!--  echo '<button  type="submit" class="btn btn-outline-dark mr-1" aria-current="page" href="engine/logoffuser.php">Logout ' . $_SESSION["fname"] . '</a></u></li>';-->
          <?php
          if (isset($_SESSION['uid'])) {

            echo '<ul class="nav justify-content-end">';
            echo '<li class="nav-item">';
            echo '</div>';
            echo '<form action="engine/logoffuser.php">';
            echo '<input type="submit"class="btn btn-outline-dark mr-1" value="Logout ' . $_SESSION["fname"] . '" />';

            echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>';
            echo '</form>';

            echo '</div>';
            echo '<br>';
          } else {

            echo ' </div>';
            echo '<form class="d-flex">';
            echo '<button type="button" class="btn btn-outline-dark mr-1" data-bs-toggle="modal" data-bs-target="#_modal_login">Login</button>';

            echo '<button type="button" class="btn btn-outline-dark mr-1" data-bs-toggle="modal" data-bs-target="#_modal_register">Register</button>';
            echo '</form>';
          }


          ?>
          <!-- Login, Logout, Register End -->


      </div>
  </div>
  </div>

</nav>
<br>