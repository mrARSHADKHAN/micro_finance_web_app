<?php
  include("includes/header.php");
//   include("includes/topbar.php");
//   include("includes/sidebar.php");
?>


<section class="content">
        <div class="container-fluid">

            <!-- Horizontal Form -->
            <div class="card card-info m-5 mx-auto" style="width:70%;"> 
                <div class="card-header">
                    <h3 class="card-title">Add Your Details</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group ">
                                    <label for="inputName">First Name</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group ">
                                    <label for="inputName">Last Name</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>    
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group ">
                                    <label for="inputName">NIC</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group ">
                                    <label for="inputName">Passport No.</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>    
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="inputName">NIC</label>
                            <input type="text" id="" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="inputName">Passport No.</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Address</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Save</button>
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
    

        </div><!-- /.container-fluid -->
    </section> 

   




</div>
<!-- /.content-wrapper -->

<?php
  include("includes/footer.php");
?>