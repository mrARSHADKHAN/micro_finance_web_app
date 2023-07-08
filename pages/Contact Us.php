
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>

    <div class="head">

      
      <script>
        $(document).ready(function(){
          $('a[href^="5contactus.php"]').addClass('active');
        });
      </script>

        <div class="toppic">
          <div style="background-color:black; opacity: .5">
              <h1 align="center" class="pagehead" style="color:white">CONTACT US</h1>
          
        </div>
        <div style="background-color:black; opacity: .2">
          <h4 style="color:white" class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
         a matter of hours to help you.</h4>
        </div>
    </div><!--End of head-->


    <div class="container">

        <div class="row" style="margin-top:30px">

          <div class="col-lg-6 col-md-6 contact">
            <img src="resources/images/contactus.jpg" style="padding-left:0px;" height="458px" class="img mb-3 col-lg-12 col-md-12 col-sm-12" alt=""/>
          </div>

            <div class="col-lg-6 col-md-6" style="background-color:#28282840; color:black;">
              <form onsubmit="return validate();" action="engine/contactus-form_2.php" method="post" enctype="multipart/form-data" style="margin-top:10px">

                    <div class="form-row">
                          <label class="label" for="name">Name:</label>
                          <div class="input-group mb-2 col-lg-12 col-md-12 col-sm-12">
                            <input type="text" class="form-control col-lg-12 col-md-12 col-sm-12" name="first_name" placeholder="First name" required>
                            <br>
                            <input type="text" class="form-control col-lg-12 col-md-12 col-sm-12" name="last_name" placeholder="Last name" required>
                          </div>
                    </div><!--forn control format ends here -->

                    <div class="form-row">
                          <label class="label" for="name">Contact Number:</label>
                          <div class="mb-2 col-lg-12 col-md-12 col-sm-12">
                            <input type="number" class="form-control col-lg-12 col-md-12 col-sm-12" name="phone" onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                   minlength="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   placeholder="0771234567">
                              <small id="number" class="form-text text-muted" align="center">  Optional </small>
                          </div>
                    </div><!--forn control format ends here -->

                    <div class="form-row">
                          <label class="label" for="">Email:</label>
                          <div class="mb-2 col-lg-12 col-md-12 col-sm-12">
                            <input type="email" class="form-control col-lg-12 col-md-12 col-sm-12" name="user_id" placeholder="yourname@domain.com" required>
                          </div>
                    </div><!--forn control format ends here -->

                    <div class="form-row">
                          <label class="label" for="name">Comments:</label>
                          <div class="input-group mb-2 col-lg-12 col-md-12 col-sm-12">
                            <textarea class="form-control col-lg-12 col-md-12 col-sm-12" id="comments" rows="4" name="comments" placeholder="Enter your comments" required></textarea>
                          </div>
                    </div><!--forn control format ends here -->
                    <button class="btn btn-primary btn-lg my-3 mb-3" name="submit" value="SUBMIT" type="submit" style="width:150px;">SUBMIT</button>
                    <button class="btn btn-dark btn-lg my-3 mb-3" name="cancel" value="CANCEL" type="reset" style="width:150px;">CANCEL</button>
            </div>
        </div><!-- end of div row-->
</div><!--end of container -->

<!-- Including footer  -->


  <script type="text/javascript">

      function validate(){
        var flag = false;

        if(document.getElementById("fname").value==""){
          alert ('First Name Expected\nPlease enter your First Name properly')
        }

        else if(document.getElementById("lname").value==""){
          alert ('Last Name Expected\nPlease enter your Last Name properly')
        }
        else if(document.getElementById("phone").value==""){
          alert ('Contact Number Expected\nPlease enter your Phone number correctly')
        }
        else if(document.getElementById("email").value==""){
          alert ('Email Address Expected\nPlease enter your valid Email address')
        }
        else if(document.getElementById("comments").value==""){
          alert ('Message Expected\nPlease enter your correct Password')
        }

        else{
          flag = true;
        }
        return flag;
      }

  </script>





  </body>
</html>
