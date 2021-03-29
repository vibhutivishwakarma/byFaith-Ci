<section class="mt-5">

  <div class="card accountcard">
    <div class="card-body">
      <div class="container">
        <h1 class="text-center mb-2 pb-3 ">Sign Up</h1>
        <div class="col-md-2"></div>
        <div class="col-md-8 mx-auto mt-4">
          <?= form_open('signing-up')?>
          <!-- <form > -->
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputfirst">First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo set_value('firstname'); ?>" size="15">
                <small style="color:red;"><?php echo form_error('firstname'); ?></small> 
              </div>
              <div class="form-group col-md-6">
                <label for="inputlast">Last Name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo set_value('lastname'); ?>" size="15" >
                <small style="color:red;"><?php echo form_error('lastname'); ?></small> 
              </div>
              <div class="form-group col-md-6">
                <label for="inputemail"> Email Address</label>
                <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" size="30">
                <small style="color:red;"><?php echo form_error('email'); ?></small> 
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"> Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" size="20">
                <small style="color:red;"><?php echo form_error('password'); ?></small> 
              </div>
            </div>
            <div class="form-group">
              <label for="inputTel">Phone number</label>
              <input type="tel" name="number" class="form-control" onkeypress="if(this.value.length==10) return false;" value="<?php echo set_value('number'); ?>" size="10">
              <!-- [0-9]{10} -->
              <small style="color:red;"><?php echo form_error('number'); ?></small> 
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Address</label>
              <textarea class="form-control" type="text" name="address" rows="3"  size="50">
              <?php echo set_value('address'); ?>
              </textarea>
              <small style="color:red;"><?php echo form_error('address'); ?></small> 
            </div>
              <button type="submit" class="btn btn-primary createbtn">Create Account</button>
          <!-- </form> -->
          <?= form_close(); ?>
        </div>
        <div class="col-md-2"></div>
      </div>


    </div>
  </div>
</section>