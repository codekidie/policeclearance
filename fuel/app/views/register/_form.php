
<?php echo Form::open(array("class"=>"form-horizontal col-md-4 col-md-offset-4 register-wrapper","enctype"=>"multipart/form-data")); ?>
<center>
			<h1>Register</h1>
</center>
	<fieldset>
			<div class="form-group">
			<input type="file" name="filename" class="col-md-4 form-control" style="visibility: hidden;">
			</div>

		<div class="form-group">
			<?php echo Form::label('First name', 'firstname', array('class'=>'control-label')); ?>

			<input type="text" name="firstname" class="form-control">

		</div>

		<div class="form-group">
			<?php echo Form::label('Middle name', 'middlename', array('class'=>'control-label')); ?>

			<input type="text" name="middlename" class="form-control">

		</div>

		<div class="form-group">
			<?php echo Form::label('Last name', 'lastname', array('class'=>'control-label')); ?>

			<input type="text" name="lastname" class="form-control">

		</div>	

		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($register) ? $register->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::input('password', Input::post('password', isset($register) ? $register->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password','type'=>'password')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($register) ? $register->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
	
		<div class="form-group" style="margin-top:10px;">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary col-md-5')); ?>	
			<?php echo Html::anchor('admin/login', 'Already Got Account', array('class' => 'btn btn-info btn btn-info col-md-5 col-md-offset-2')); ?>	

		</div>

	</fieldset>
<?php echo Form::close(); ?>