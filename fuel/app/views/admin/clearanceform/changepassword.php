

<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<center><h3>Change Password Form</h3></center>
	<hr>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="piNewPass">Old Password</label>
  <div class="col-md-4">
    <input id="piNewPass" name="oldpass" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="piNewPassRepeat">New Password</label>
  <div class="col-md-4">
    <input id="piNewPassRepeat" name="newpass" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bCancel"></label>
  <div class="col-md-8">
    <button type="submit" name="bGodkend" class="btn btn-success">Submit</button>
  </div>
</div>

<?php echo Form::close(); ?>
