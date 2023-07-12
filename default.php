  <!doctype html>
  <link href="css/style.css" rel="stylesheet">
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

  <body class="main">
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
    
      <?php require_once("engine/_reg.php"); ?>
      
    
    

       


  
  


      

     









    </div>



  </body>

  </html>