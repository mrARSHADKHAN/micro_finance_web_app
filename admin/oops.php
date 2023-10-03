<?php
  include("includes/header.php");
?>

<!-- Main content -->
<section class="content" style="
    height: 100vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
">
      <div class="error-page">
        <!-- <h2 class="headline text-danger">500</h2> -->

        <div class="error-content" style="margin-left: 0px;">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="#">return to dashboard</a>
          </p>
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    <!-- /.content -->



<?php
  include("includes/footer.php");
?>