<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<?
	if (Auth::get('group') == 50) {
		$data = DB::select('*')->from('clearanceforms')
						 ->where('firstname',Auth::get('firstname'))
						 ->where('middlename',Auth::get('middlename'))
						 ->where('lastname',Auth::get('lastname'))
						 ->limit(1)
						 ->execute();

		foreach ($data as $d) {
			$id         =  $d['id'];
			$firstname  =  $d['firstname'];
			$middlename =  $d['middlename'];
			$lastname   =  $d['lastname'];
			$address    =  $d['address'];
			$sex 		=  $d['sex'];
		    $civilstatus  =  $d['civilstatus'];
		    $fileno  =  $d['fileno'];
		    $orno  =  $d['orno'];
		    $dateofbirth  = $d['dateofbirth'];
		    $placeofbirth = $d['placeofbirth'];
			$comtaxno   = $d['comtaxno'];
			$issuedat   =  $d['issuedat'];
			$issuedon   =  $d['issuedon'];
			$purpose    = $d['purpose'];
		 	$contactnumber = $d['contactnumber'];
			$created_at = $d['created_at'];
			$updated_at = $d['updated_at'];
		 }

		 $query_count =  DB::count_last_query();

		 if ($query_count == 0) {
		 	$id              = "";
			$fileno          = "";
		    $orno            = "";
			$firstname       = "";
		    $middlename      = "";
		    $lastname        = "";
		    $address         = "";
		    $sex             = "";
		    $civilstatus     = "";
		    $dateofbirth     = "";
		    $placeofbirth    = "";
		    $comtaxno   	 = "";
		    $issuedat        = "";
		    $issuedon        = "";
		    $purpose         = "";
		    $contactnumber   = "";
		    $created_at      = "";
		    $updated_at      = "";	
		 
		 }	

	}else{
		if(isset($clearanceform))
		{
			$id              = $clearanceform->id;
		    $fileno          = $clearanceform->fileno;
		    $orno            = $clearanceform->orno;
		    $firstname       = $clearanceform->firstname;
		    $middlename      = $clearanceform->middlename;
		    $lastname        = $clearanceform->lastname;
		    $address         = $clearanceform->address;
		    $sex             = $clearanceform->sex;
		    $civilstatus     = $clearanceform->civilstatus;
		    $dateofbirth     = $clearanceform->dateofbirth;
		    $placeofbirth    = $clearanceform->placeofbirth;
		    $comtaxno   	 = $clearanceform->comtaxno;
		    $issuedat        = $clearanceform->issuedat;
		    $issuedon        = $clearanceform->issuedon;
		    $purpose         = $clearanceform->purpose;
		    $contactnumber   = $clearanceform->contactnumber;
		    $created_at      = $clearanceform->created_at;
		    $updated_at      = $clearanceform->updated_at;
		}else{
			$id              = "";
			$fileno          = "";
		    $orno            = "";
			$firstname       = "";
		    $middlename      = "";
		    $lastname        = "";
		    $address         = "";
		    $sex             = "";
		    $civilstatus     = "";
		    $dateofbirth     = "";
		    $placeofbirth    = "";
		    $comtaxno   	 = "";
		    $issuedat        = "";
		    $issuedon        = "";
		    $purpose         = "";
		    $contactnumber   = "";
		    $created_at      = "";
		    $updated_at      = "";
		}
	}


?>

<section class="content">
      <div class="row">
        <!-- /.col (left) -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Clearance Form</h3>
            </div>
            <div class="box-body" style="padding: 30px !important;">
             <div class="row">
	              <div class="form-group col-md-3">
		                  <label>File No:</label>
		                  <div class="input-group date">
		                  <div class="input-group-addon">
		                    <i class="fa fa-hashtag"></i>
		                  </div>
	                	    <input type="hidden" name="id" value="<?php echo $id; ?>">
							<?php echo Form::input('fileno', Input::post('fileno', $fileno), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fileno')); ?>
	                  </div>
	                <!-- /.input group -->
	              </div>
	              <!-- /.form group -->

	              <!-- Date range -->
	              <div class="form-group col-md-3" style="margin-left: 10px;">
	                      <label>Or no:</label>
		                   <div class="input-group">
			                   <div class="input-group-addon">
			                    <i class="fa fa-hashtag"></i>
			                   </div>
				                 <?php echo Form::input('orno', Input::post('orno', $orno ), array('class' => 'col-md-4 form-control', 'placeholder'=>'Orno')); ?>
			                </div>
	                <!-- /.input group -->
	              </div>
             </div> 
              <!-- /.form group -->
             <div class="row">
		              <div class="form-group col-md-3">
		                <label>First Name:</label>

		                <div class="input-group">
		                  <div class="input-group-addon">
		                    <i class="fa fa-clock-o"></i>
		                  </div>
		                 <?php echo Form::input('firstname', Input::post('firstname', $firstname), array('class' => 'col-md-4 form-control', 'placeholder'=>'Firstname')); ?>
		                </div>
		                <!-- /.input group -->
		              </div>

		              <div class="form-group col-md-3" style="margin-left: 10px;">
		                <label>Middle Name:</label>

		                <div class="input-group">
		                  <div class="input-group-addon">
		                    <i class="fa fa-clock-o"></i>
		                  </div>
		               	<?php echo Form::input('middlename', Input::post('middlename', $middlename), array('class' => 'col-md-4 form-control', 'placeholder'=>'Middlename')); ?>
		                </div>
		                <!-- /.input group -->
		              </div>

		                <div class="form-group col-md-3" style="margin-left: 10px;">
		                <label>Last Name:</label>

		                <div class="input-group">
		                  <div class="input-group-addon">
		                    <i class="fa fa-clock-o"></i>
		                  </div>
		               <?php echo Form::input('lastname', Input::post('lastname', $lastname), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lastname')); ?>
		                </div>
		                <!-- /.input group -->
		              </div>
              </div>

              <div class="row">
	              	<div class="form-group col-md-3">
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

					<div class="form-group col-md-3" style="margin-left:10px;">
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

					<div class="form-group col-md-3" style="margin-left: 10px;">
						<?php echo Form::label('Dateofbirth', 'dateofbirth', array('class'=>'control-label')); ?>
						<input type="date" name="dateofbirth" class="col-md-4 form-control" value="<?php echo $dateofbirth;?>" >
					</div>

					<div class="form-group col-md-3" style="margin-left: 10px;">
					<?php echo Form::label('Contactnumber', 'contactnumber', array('class'=>'control-label')); ?>
					<?php echo Form::input('contactnumber', Input::post('contactnumber', $contactnumber), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactnumber')); ?>
					</div>


              </div>
               <div class="row">
              		<div class="form-group col-md-3">
						<?php echo Form::label('Place of birth', 'placeofbirth', array('class'=>'control-label')); ?>

							<?php echo Form::input('placeofbirth', Input::post('placeofbirth', $placeofbirth), array('class' => 'col-md-4 form-control', 'placeholder'=>'Placeofbirth')); ?>
					</div>
					<div class="form-group col-md-3" style="margin-left: 10px;">
						<?php echo Form::label('Com tax no:', 'comtaxno', array('class'=>'control-label')); ?>

							<?php echo Form::input('comtaxno', Input::post('comtaxno', $comtaxno), array('class' => 'col-md-4 form-control', 'placeholder'=>'Comtaxno')); ?>

					</div>
					<div class="form-group col-md-3" style="margin-left: 10px;">
						<?php echo Form::label('Issued at', 'issuedat', array('class'=>'control-label')); ?>

							<?php echo Form::input('issuedat', Input::post('issuedat', $issuedat), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedat')); ?>

					</div>

					<div class="form-group col-md-3" style="margin-left: 10px;">
						<?php echo Form::label('Issuedon', 'issuedon', array('class'=>'control-label')); ?>

							<?php echo Form::input('issuedon', Input::post('issuedon',$issuedon), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedon','type'=>'date')); ?>

					</div>
				</div>
				<div class="row">
						<div class="form-group col-md-12">
							<?php echo Form::label('Purpose', 'purpose', array('class'=>'control-label')); ?>

								<?php echo Form::textarea('purpose', Input::post('purpose', $purpose), array('class' => 'col-md-8 form-control', 'rows' => 3, 'placeholder'=>'Purpose')); ?>
						</div>
						<br>
					
					<button type="submit"  class="btn bg-maroon btn-md btn-flat margin" style="margin:0px !important">Apply</button>

				</div>
					
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
    </section>
<?php echo Form::close(); ?>