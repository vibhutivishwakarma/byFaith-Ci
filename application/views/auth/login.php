<section class="mt-5">
  <div class="card logincard">
    <div class="card-body">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
          <?= form_open('logged-in')?>

            <div class="text-center">
              <h1 class="welcome text-center text-dark pb-2">Welcome</h1>
              <img src="assets/img/user.jpg" alt="" class="rounded-circle loginimg mx-auto">
              <div class="form-group">
                 <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email Address">
                <small style="color:red;"><?php echo form_error('email'); ?></small> 

              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                <small style="color:red;"><?php echo form_error('password'); ?></small> 

              </div>
              <button type="submit" class="btn btn-primary signinbtn ">Sign In</button>
              <br>
              <div class="signup mt-4">
                <a href="" class="singup text-secondary">Forgot Password ?</a>
                <br>
                <a href="signup" class="singup text-secondary">Sign Up</a>
              </div>
            </div>
          <?= form_close(); ?>

          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
  </div>
</section>