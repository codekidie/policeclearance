<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<div class="container">
<h3>Clearance Form</h3>

	<div class="col-md-8">
	<fieldset>
	<div class="row">
	   <div class="col-md-4 ">
				<div class="form-group">
					<?php echo Form::label('Fileno', 'fileno', array('class'=>'control-label')); ?>

						<?php echo Form::input('fileno', Input::post('fileno', isset($clearanceform) ? $clearanceform->fileno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fileno')); ?>

				</div>
		</div>
		 <div class="col-md-4 col-md-offset-1">
			<div class="form-group">
				<?php echo Form::label('Orno', 'orno', array('class'=>'control-label')); ?>

					<?php echo Form::input('orno', Input::post('orno', isset($clearanceform) ? $clearanceform->orno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Orno')); ?>
			</div>
		</div>
	</div>
	<div class="row">
 	  <div class="col-md-3">
		<div class="form-group">
			<?php echo Form::label('Firstname', 'firstname', array('class'=>'control-label')); ?>
				<?php 
					if (Auth::get('group') == 50) {
						$firstname = Auth::get('firstname');
					}
					else if(isset($clearanceform))
					{
					    $firstname = $clearanceform->firstname;
					}else{
						$firstname = '';
					}
				 ?>
				<?php echo Form::input('firstname', Input::post('firstname', $firstname), array('class' => 'col-md-4 form-control', 'placeholder'=>'Firstname')); ?>

		</div>
	  </div>
 		<div class="col-md-3 col-md-offset-1">
	  	
		<div class="form-group">
			<?php echo Form::label('Middlename', 'middlename', array('class'=>'control-label')); ?>
				<?php 
					if (Auth::get('group') == 50) {
						$middlename = Auth::get('middlename');
					}
					else if(isset($clearanceform))
					{
					    $middlename = $clearanceform->middlename;
					}else{
						$middlename = '';
					}
				?>

				<?php echo Form::input('middlename', Input::post('middlename', $middlename), array('class' => 'col-md-4 form-control', 'placeholder'=>'Middlename')); ?>

		</div>
	</div>
 		<div class="col-md-3 col-md-offset-1">
		
		<div class="form-group">
			<?php echo Form::label('Lastname', 'lastname', array('class'=>'control-label')); ?>
				<?php 
					if (Auth::get('group') == 50) {
						$lastname = Auth::get('lastname');
					}
					else if(isset($clearanceform))
					{
					    $lastname = $clearanceform->lastname;
					}else{
						$lastname = '';
					}
				?>
				<?php echo Form::input('lastname', Input::post('lastname', isset($clearanceform) ? $clearanceform->lastname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lastname')); ?>

		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($clearanceform) ? $clearanceform->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		<div class="form-group">
			<?php echo Form::label('Sex', 'sex', array('class'=>'control-label')); ?>
			<select name="sex" class="col-md-4 form-control">
			<?php if(isset($clearanceform)){
					if ($clearanceform->sex == "Male") {
						echo '<option value="Male" selected>Male</option>
				          <option value="Female">Female</option>';
					}else if ($clearanceform->sex == "Female"){
						echo '<option value="Male">Male</option>
				          <option value="Female" selected>Female</option>';
					}
			}else{
					echo '<option value="Male">Male</option>
				          <option value="Female">Female</option>';
				} ?>
				
			</select>
				

		</div>
		</div>
		<div class="col-md-3 col-md-offset-1">
		<div class="form-group">
			<?php echo Form::label('Civilstatus', 'civilstatus', array('class'=>'control-label')); ?>

			<select name="civilstatus" class="col-md-4 form-control">
			<?php if(isset($clearanceform)){
					if ($clearanceform->civilstatus == "Single") {
						echo '<option value="Single" selected>Single</option>
				          <option value="Married">Married</option>
				          <option value="Widower">Widower</option>
				          <option value="Separated">Separated</option>';
					}else if ($clearanceform->civilstatus == "Married"){
						 echo '<option value="Single">Single</option>
				          <option value="Married" selected>Married</option>
				          <option value="Widower">Widower</option>
				          <option value="Separated">Separated</option>';
					}else if ($clearanceform->civilstatus == "Widower"){
						 echo '<option value="Single">Single</option>
				          <option value="Married" >Married</option>
				          <option value="Widower" selected>Widower</option>
				          <option value="Separated">Separated</option>';
					}
					else if ($clearanceform->civilstatus == "Separated"){
						 echo '<option value="Single">Single</option>
				          <option value="Married" >Married</option>
				          <option value="Widower" >Widower</option>
				          <option value="Separated" selected>Separated</option>';
					}
			}else{
				     echo '<option value="Single">Single</option>
				          <option value="Married">Married</option>
				          <option value="Widower">Widower</option>
				          <option value="Separated">Separated</option>';
				} ?>
				
			</select>

			

		</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-3 ">
		<div class="form-group">
			<?php echo Form::label('Dateofbirth', 'dateofbirth', array('class'=>'control-label')); ?>
			<input type="date" name="dateofbirth" class="col-md-4 form-control" value="<?php if(isset($clearanceform)){
					echo $clearanceform->dateofbirth ;
				};?>" >

			
		</div>
	</div>
	<div class="col-md-3 col-md-offset-1">	
		<div class="form-group">
			<?php echo Form::label('Placeofbirth', 'placeofbirth', array('class'=>'control-label')); ?>

				<?php echo Form::input('placeofbirth', Input::post('placeofbirth', isset($clearanceform) ? $clearanceform->placeofbirth : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Placeofbirth')); ?>

		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		<div class="form-group">
			<?php echo Form::label('Comtaxno', 'comtaxno', array('class'=>'control-label')); ?>

				<?php echo Form::input('comtaxno', Input::post('comtaxno', isset($clearanceform) ? $clearanceform->comtaxno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Comtaxno')); ?>

		</div>
		</div>
		<div class="col-md-3 col-md-offset-1">
		<div class="form-group">
			<?php echo Form::label('Issuedat', 'issuedat', array('class'=>'control-label')); ?>

				<?php echo Form::input('issuedat', Input::post('issuedat', isset($clearanceform) ? $clearanceform->issuedat : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedat')); ?>

		</div>
		</div>
		<div class="col-md-3 col-md-offset-1">
		<div class="form-group">
			<?php echo Form::label('Issuedon', 'issuedon', array('class'=>'control-label')); ?>

				<?php echo Form::input('issuedon', Input::post('issuedon', isset($clearanceform) ? $clearanceform->issuedon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedon')); ?>

		</div>
		</div>
	 </div>
	<div class="row">
		<div class="col-md-4">

		<div class="form-group">
			<?php echo Form::label('Purpose', 'purpose', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('purpose', Input::post('purpose', isset($clearanceform) ? $clearanceform->purpose : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Purpose')); ?>

		</div>
		</div>
		<div class="col-md-3 col-md-offset-1">

		<div class="form-group">
			<?php echo Form::label('Contactnumber', 'contactnumber', array('class'=>'control-label')); ?>

				<?php echo Form::input('contactnumber', Input::post('contactnumber', isset($clearanceform) ? $clearanceform->contactnumber : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactnumber')); ?>

		</div>
		</div>
	</div>	
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Apply', array('class' => 'btn btn-primary')); ?>		
		</div>
	</fieldset>
	</div>
	</div>	
<?php echo Form::close(); ?>