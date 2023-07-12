<header id="header" class="fixed-top d-flex align-items-center">

    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h1><a href="/">MicroFapp</a></h1>
        </div>

            <nav class="navbar navbar-expand-lg" id="navbar">
            <!-- <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                    <!-- Showing Pages -->
                    <?php
                    $pages = glob('pages/*.php', GLOB_BRACE);
                    foreach ($pages as $page) {
                       
                        echo '<li>';
                          echo '<li><a class="nav-link active " aria-current="page" href="?page=' . $page . '">' . str_replace('.php', '', (str_replace('pages/', '', $page))) . '</a><li>';
                       
                       
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['uid'])) {
                        echo '<li>';
                        echo '<a class="nav-link active" aria-current="page" href="/admin/index.php">Dashboard</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '<form action="engine/logoffuser.php">';
                        echo '<input type="submit" class="btn btn-outline-white ms-5 me-2" value="Logout ' . $_SESSION["fname"] . '" />';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">';
                        echo '<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>';
                        echo '<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>';
                        echo '</svg>';
                        echo '</form>';
                    } else {
                        echo '</ul>';
                        echo '<form class="d-flex">';
                        echo '<button type="button" class="btn btn-outline-white ms-5 me-2 " data-bs-toggle="modal" data-bs-target="#_modal_login">Login</button>';
                        echo '<button type="button" class="btn btn-outline-white  me-2" data-bs-toggle="modal" data-bs-target="#_modal_register">Register</button>';
                        echo '</form>';
                    }
                    ?>

                </ul>
            </div>
  
       <!--  </div> -->
       <i class="bi bi-list mobile-nav-toggle"></i> 
        </nav>
    </div>
</header>