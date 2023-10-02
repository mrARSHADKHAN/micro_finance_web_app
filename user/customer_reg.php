<?php
    include("includes/header.php");
//   include("includes/topbar.php");
//   include("includes/sidebar.php");

    //require("validate_user.php");
    require_once("../engine/_db.php");

    $user_id = $_SESSION["user_id"];

?>


<section class="content">
        <div class="container-fluid">

            <div class="" style="display: flex; justify-content: center; align-items: center; height: 100vh;">

                <!-- Horizontal Form -->
                <div class="card card-info m-5 mx-auto" style="width:60%;"> 
                    <div class="card-header">
                        <h3 class="card-title">Personal Details</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="customer_reg_sql.php">
                        <div class="card-body" style="overflow: auto;">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label for="inputName">First Name</label>
                                        <input type="text" name="f_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label for="inputName">Middle Name</label>
                                        <input type="text" name="m_name" class="form-control">
                                    </div>    
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label for="inputName">Last Name</label>
                                        <input type="text" name="l_name" class="form-control" required>
                                    </div>    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <!-- Date -->
                                    <div class="form-group">
                                    <label>Date of Birth</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" name="dob" class="form-control datetimepicker-input" data-target="#reservationdate" required />
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group ">
                                        <label for="inputName">NIC</label>
                                        <input type="text" name="nic" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group ">
                                        <label for="inputName">Passport No. <span style="font-size: 12px;" >(If available)</span></label>
                                        <input type="text" name="passport" class="form-control">
                                    </div>    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label for="inputName">Mobile No.</label>
                                        <input type="text" name="mobile" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                    <div class="form-group ">
                                        <label for="inputName">Email</label>
                                        <input type="email" value="<?php echo $user_id ?>" name="email" class="form-control" disabled>
                                    </div>    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label for="inputName">Address</label>
                                        <input type="text" name="address" class="form-control" required>
                                    </div>    
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label for="inputName">City/Town</label>
                                        <input type="text" name="city" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info float-right">Save</button>
                            <button type="reset" class="btn btn-default">Clear</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>

        </div><!-- /.container-fluid -->
    </section> 

   


</div>
<!-- /.content-wrapper -->


<?php

    include("includes/footer.php");
?>