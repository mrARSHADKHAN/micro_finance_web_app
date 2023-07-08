<!-- Modal -->
<div class="modal fade" id="_modal_register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="engine/_createuser.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register to E-Market</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="fname" required>
            <label for="floatingInput">First Name</label>


          </div>
          <br>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputlname" placeholder="Last Name" name="lname" required>
            <label for="floatingInput">Last Name</label>


          </div>
          <br>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInputEmail" placeholder="Email Address" name="email" required>
            <label for="floatingInput">Email address</label>



          </div>
          <br>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInputpassword" placeholder="password" name="password" required>
            <label for="floatingInput">Password</label>

          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInputpasswordV" placeholder="passwordV" name="passwordV" required>
            <label for="floatingInput">Type Password Again</label>

          </div>
          <input type="hidden" id="demo" name="testvar" value="Kandy">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-primary">Register</button>
        </div>
    </div>
    </form>
  </div>
</div>
</div>