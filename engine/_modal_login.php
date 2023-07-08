<!-- Login Modal -->
<link rel="stylesheet" href="style/base1.css">
<div class="modal1">
<div class="modal fade" id="_modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="engine/_loguserin.php" method="POST">
      <div class="modal-header p-5 pb-4 border-bottom-0">
 
        <h2 class="fw-bold mb-0">Login</h2>
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
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Login</button>
          <!-- <button type="button" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" data-bs-toggle="modal" data-bs-target="#_modal_register">Register</button> -->
          <small class="text-muted">By clicking Log in, you agree to the terms of use.</small>
          <!-- <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="http://twitter.com"></use></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="http://facebook.com"></use></svg>
            Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="http://github.com"></use></svg>
            Sign up with GitHub
          </button> -->
        </form>
      </div>
    </div>
  </div>
</div>
</div>