<?php
  include("includes/header.php");
//   include("includes/topbar.php");
//   include("includes/sidebar.php");
?>


<section class="content">
    <div class="container-fluid">

        <div class="" style="display: flex; justify-content: center; align-items: center; height: 100vh;">

            <!-- /.row -->
            <div class="row" style="width:60%;">
            <div class="col-md-12">
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Add your details</h3>
                </div>
                <div class="card-body p-0">
                    <div class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                            <!-- your steps here -->
                            <div class="step" data-target="#logins-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Personal</span>
                                </button>
                            </div>
                            <div class="line"></div>
                                <div class="step" data-target="#Contact-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="Contact-part" id="Contact-part-trigger">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Contact</span>
                                </button>
                            </div>
                            <div class="line"></div>
                                <div class="step" data-target="#information-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Employment</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                        <form method="POST" action="#">
                            <!-- your steps content here -->
                            <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group ">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group ">
                                            <label for="inputName">Middle Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>    
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group ">
                                            <label for="inputName">Last Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control">
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
                                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group ">
                                            <label for="inputName">NIC</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group ">
                                            <label for="inputName">Passport No. <span style="font-size: 12px;" >(If available)</span></label>
                                            <input type="text" class="form-control">
                                        </div>    
                                    </div>
                                </div>
                                <button class="btn btn-info float-right" style="margin-bottom:20px;" onclick="stepper.next()" >Next</button>
                            </div>
                            <div id="Contact-part" class="content" role="tabpanel" aria-labelledby="Contact-part-trigger">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group ">
                                            <label for="inputName">Mobile No.</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                        <div class="form-group ">
                                            <label for="inputName">Email</label>
                                            <input type="email" class="form-control">
                                        </div>    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                        <div class="form-group">
                                            <label for="inputName">Address</label>
                                            <input type="text" class="form-control">
                                        </div>    
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group ">
                                            <label for="inputName">City/Town</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                <button class="btn btn-info float-right" onclick="stepper.next()">Next</button>
                            </div>
                            <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Employment Status</label>
                                            <select class="form-control">
                                                <option>Employed</option>
                                                <option>self-employed</option>
                                                <option>Unemployed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Source of Income</label>
                                            <select class="form-control">
                                                <option>Salary</option>
                                                <option>Business Income</option>
                                                <option>Pension</option>
                                                <option>Rental Income</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="inputName">Specify <span style="font-size: 12px;" >(If You Choose Other)</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                <button type="submit" class="btn btn-info float-right">Submit</button>
                            </div>
                            <!-- <button type="submit" class="btn btn-info float-right">Submit</button> -->
                        </form>
                        </div>
                    </div>
                </div>
                
                </div>
                <!-- /.card -->
            </div>
            </div>

        </div>

    </div><!-- /.container-fluid -->
</section> 

   


</div>
<!-- /.content-wrapper -->


<?php

    include("includes/footer.php");
?>