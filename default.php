  <!doctype html>
  <link rel="stylesheet" href="style/base1.css">
  <html lang="en">
 
  <?php session_start();
  ?>
  <?php if (isset($_GET['page'])) {
    $content_page = $_GET['page'];
  } else {
    $content_page = "Home.php";
  }
  ?>

  <head>


    <?php require_once("engine/_db.php"); ?>
    <!--!import _meta-->
    <?php require_once("engine/_meta.php"); ?>
    <!--!import _style-->
    <?php require_once("engine/_style.php"); ?>



  </head>

  <body>

    <div class="content">

      <!--import _navbar-->
      <?php require_once("engine/_navbar.php"); ?>



      <!--import _script-->
      <?php require_once("engine/_script.php"); ?>

      <!--import content-->
      <?php require_once($content_page); ?>

      <!--import _modal-->
      <?php require_once("engine/_modal_login.php"); ?>
      <!--import _footer-->
      <?php require_once("engine/_footer.php"); ?>
       
       <!--import product_register-->
       <?php require_once("engine/_mdl_regproduct.php"); ?>
      <!--import _mdl reg-->
      <?php require_once("engine/_reg.php"); ?>
    
      <!--import _product_delete-->
      <?php require_once("engine/_product_delete_mdl.php"); ?>
         <!--import _product_update-->
         <?php require_once("engine/_update_mdl.php"); ?>
       
      <!--import _product_card-->
      <?php require_once("engine/_modal_cart.php"); ?>
    

       


  
  


      

     









    </div>



  </body>

  </html>