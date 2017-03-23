<div class="row">
	<div class="col-md-4 col-md-offset-4 login-wrapper">
	<?php echo Form::open(array()); ?>

			<div class="form-group ">
				<label for="email">Input Username :</label>
				<input type="text" name="username" class="form-control">
			</div>
			<hr>
			<div class="actions">
				<?php echo Form::submit(array('value'=>'Reset', 'name'=>'submit', 'class' => 'btn btn-md btn-primary btn-block')); ?>
			</div>
<?php echo Form::close(); ?>		
</div>
</div>	