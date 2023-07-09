<!-- Nav Bar -->

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
 
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1><a href="/">MicroFapp</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
    
 <?php
      $pages = glob('pages/*.php', GLOB_BRACE);
      foreach ($pages as $page) {
        echo '<ul class="nav justify-content">';
  /*       echo '<ul class="navbar-nav me-auto">';
        echo '<li class="nav-item">'; */
        echo '<li> <a class="nav-link active" aria-current="page" href="?page=' . $page . '">' . str_replace('.php', '', (str_replace('pages/', '', $page))) . '</a></li>';
     /*    echo '</ul>'; */
      }

      ?>
 <?php
              if (isset($_SESSION['uid'])) {

          /*       echo '<ul class="nav justify-content">';
                echo '<li class="nav-item">'; */
                echo '<form action="engine/logoffuser.php">';
                echo '<input type="submit"class="btn btn-outline-dark  px-2 my-sm-0 ms-3 me-2" value="Logout ' . $_SESSION["fname"] . '" />';

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
                echo '<button type="button" class="btn btn-outline-dark me-2  my-sm-0" data-bs-toggle="modal" data-bs-target="#_modal_login">Login</button>';
                echo '<button type="button" class="btn btn-outline-dark my-sm-0" data-bs-toggle="modal" data-bs-target="#_modal_register">Register</button>';
                echo '</form>';
              }


              ?>





<!-- 
      <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container">
          <a href="/" class="navbar-brand mb-0 ">
            <h1>Micro</h1>
          </a>


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-0 mb-lg-0"> -->
              <!-- Showing Pages -->
              <?php
            /*   $pages = glob('pages/*.php', GLOB_BRACE);
              foreach ($pages as $page) {
                echo '<ul class="navbar-nav mr-auto">';
                echo '<li class="nav-item">';
                echo '<a class="nav-link active" aria-current="page" href="?page=' . $page . '">' . str_replace('.php', '', (str_replace('pages/', '', $page))) . '</a>';
                echo '</li>';
                echo '</ul>';
              } */

              ?>



              <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Product Registry</a>
            <ul class="dropdown-menu">
            </ul>
          </li> -->
              <!-- Login, Logout, Register -->
              <!--  echo '<button  type="submit" class="btn btn-outline-dark mr-1" aria-current="page" href="engine/logoffuser.php">Logout ' . $_SESSION["fname"] . '</a></u></li>';-->
              <?php
              /* if (isset($_SESSION['uid'])) {

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
                echo '<button type="button" class="btn btn-outline-success me-2 my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#_modal_login">Login</button>';
                echo '<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#_modal_register">Register</button>';
                echo '</form>';
              }
 */

              ?>
              <!-- Login, Logout, Register End -->


          </div>
        </div>



      </nav>
  <!-- </div> -->
</header><!-- End Header -->