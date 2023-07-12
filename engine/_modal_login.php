<!-- Login Modal -->
<link rel="stylesheet" href="style/base1.css">
<div class="modal1">
<div class="modal fade" id="_modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="engine/_loguserin.php" method="POST">
      <div class="modal-header p-5 pb-4 border-bottom-0">
 
        <h2 class="fw-bold mb-0">Sign In</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="modal-content">
          <div class="form-floating mb-3">
          <input type="email" class="form-control" placeholder="Username" aria-label="Username" name="email" aria-describedby="login_email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
           <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="login_pw">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign In</button>
         
          <small class="text-muted">By clicking Log in, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
</div>
</div>