<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Fileno', 'fileno', array('class'=>'control-label')); ?>

				<?php echo Form::input('fileno', Input::post('fileno', isset($clearanceform) ? $clearanceform->fileno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fileno')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Orno', 'orno', array('class'=>'control-label')); ?>

				<?php echo Form::input('orno', Input::post('orno', isset($clearanceform) ? $clearanceform->orno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Orno')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Firstname', 'firstname', array('class'=>'control-label')); ?>

				<?php echo Form::input('firstname', Input::post('firstname', isset($clearanceform) ? $clearanceform->firstname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Firstname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Middlename', 'middlename', array('class'=>'control-label')); ?>

				<?php echo Form::input('middlename', Input::post('middlename', isset($clearanceform) ? $clearanceform->middlename : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Middlename')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Lastname', 'lastname', array('class'=>'control-label')); ?>

				<?php echo Form::input('lastname', Input::post('lastname', isset($clearanceform) ? $clearanceform->lastname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lastname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($clearanceform) ? $clearanceform->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Sex', 'sex', array('class'=>'control-label')); ?>

				<?php echo Form::input('sex', Input::post('sex', isset($clearanceform) ? $clearanceform->sex : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Sex')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Civilstatus', 'civilstatus', array('class'=>'control-label')); ?>

				<?php echo Form::input('civilstatus', Input::post('civilstatus', isset($clearanceform) ? $clearanceform->civilstatus : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Civilstatus')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dateofbirth', 'dateofbirth', array('class'=>'control-label')); ?>

				<?php echo Form::input('dateofbirth', Input::post('dateofbirth', isset($clearanceform) ? $clearanceform->dateofbirth : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dateofbirth')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Placeofbirth', 'placeofbirth', array('class'=>'control-label')); ?>

				<?php echo Form::input('placeofbirth', Input::post('placeofbirth', isset($clearanceform) ? $clearanceform->placeofbirth : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Placeofbirth')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Comtaxno', 'comtaxno', array('class'=>'control-label')); ?>

				<?php echo Form::input('comtaxno', Input::post('comtaxno', isset($clearanceform) ? $clearanceform->comtaxno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Comtaxno')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Issuedat', 'issuedat', array('class'=>'control-label')); ?>

				<?php echo Form::input('issuedat', Input::post('issuedat', isset($clearanceform) ? $clearanceform->issuedat : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedat')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Issuedon', 'issuedon', array('class'=>'control-label')); ?>

				<?php echo Form::input('issuedon', Input::post('issuedon', isset($clearanceform) ? $clearanceform->issuedon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedon')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Purpose', 'purpose', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('purpose', Input::post('purpose', isset($clearanceform) ? $clearanceform->purpose : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Purpose')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contactnumber', 'contactnumber', array('class'=>'control-label')); ?>

				<?php echo Form::input('contactnumber', Input::post('contactnumber', isset($clearanceform) ? $clearanceform->contactnumber : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactnumber')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>