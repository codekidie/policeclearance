
<div class="row">
	<div class="col-md-4 col-md-offset-4 login-wrapper">
<center><h1>Login</h1></center>
	<?php if (isset($login_error)): ?>
				<div class="error">
					<div class="alert alert-warning">
					  <strong>Warning!</strong> <?php echo $login_error; ?>
					</div>
				</div>
	<?php endif; ?>

		<?php echo Form::open(array()); ?>
			<?php if (isset($_GET['destination'])): ?>
				<?php echo Form::hidden('destination', $_GET['destination']); ?>
			<?php endif; ?>

			<div class="form-group <?php echo ! $val->error('email') ?: 'has-error' ?>">
				<label for="email">Username :</label>
				<?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>

				<?php if ($val->error('email')): ?>
					<span class="control-label"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group <?php echo ! $val->error('password') ?: 'has-error' ?>">
				<label for="password">Password :</label>
				<?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>

				<?php if ($val->error('password')): ?>
					<span class="control-label"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></span>
				<?php endif; ?>
			</div>



			<div class="actions">
				<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-md btn-primary btn-block')); ?>
				<?php echo Html::anchor('register/create', 'Register', array('class' => 'btn btn-md btn-info btn-block')) ?>
				<?php echo Html::anchor('register/forget', 'Forget Password', array('class' => 'btn btn-md btn-info btn-block')) ?>

			</div>

			

		<?php echo Form::close(); ?>
	</div>
</div>
