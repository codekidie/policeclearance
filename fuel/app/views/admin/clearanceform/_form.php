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
			$id            =  $d['id'];
			$firstname     =  $d['firstname'];
			$middlename    =  $d['middlename'];
			$lastname      =  $d['lastname'];
			$address       =  $d['address'];
			$sex 		   =  $d['sex'];
		    $civilstatus   =  $d['civilstatus'];
		    $fileno        =  $d['id'];
		    $orno          =  $d['orno'];
		    $dateofbirth   = $d['dateofbirth'];
		    $placeofbirth  = $d['placeofbirth'];
			$comtaxno      = $d['comtaxno'];
			$issuedat      =  $d['issuedat'];
			$issuedon      =  $d['issuedon'];
			$purpose       = $d['purpose'];
			$payment       = $d['payment'];
			$schedule       = $d['schedule'];
		 	$contactnumber = $d['contactnumber'];
			$created_at    = $d['created_at'];
			$updated_at    = $d['updated_at'];
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
		    $payment         = "";
		    $contactnumber   = "";
		    $created_at      = "";
		    $schedule        = "";	
		    $updated_at      = "";	
		 
		 }	

	}else{
		
		if(isset($clearanceform))
		{
			$id              = $clearanceform->id;
		    $fileno          = $clearanceform->id;
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
		    $payment         = $clearanceform->payment;
		    $contactnumber   = $clearanceform->contactnumber;
		    $created_at      = $clearanceform->created_at;
		    $updated_at      = $clearanceform->updated_at;
		    $schedule        = $clearanceform->schedule;
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
		    $payment         = "";
		    $contactnumber   = "";
		    $created_at      = "";
		    $updated_at      = "";
		    $schedule        = "";
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
              <?php if (!empty($id)): ?>
              			<!-- <button type="button" class="btn btn-info" onclick="printclearance()" style="float: right;"><i class="fa fa-fw fa-print"></i> Print</button> -->
              <?php endif ?>
            </div>
            <div class="box-body"  id="myElementId" style="padding: 30px !important;">
             <div class="row">
	              <div class="form-group col-md-3 col-sm-3">
		                  <label>File No:</label>
		                  <div class="input-group date">
		                  <div class="input-group-addon">
		                    <i class="fa fa-hashtag"></i>
		                  </div>
	                	    <input type="hidden" name="id" value="<?php echo $id; ?>">
							<?php echo Form::input('fileno', Input::post('fileno', $fileno), array('class' => 'col-md-4 form-control','readonly'=>'readonly', 'placeholder'=>'Fileno')); ?>
	                  </div>
	                <!-- /.input group -->
	              </div>
	              <!-- /.form group -->

	              <!-- Date range -->
	              <div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
	                      <label>Or no:</label>
		                   <div class="input-group">
			                   <div class="input-group-addon">
			                    <i class="fa fa-hashtag"></i>
			                   </div>
				                 <?php echo Form::input('orno', Input::post('orno', $orno ), array('class' => 'col-md-4 form-control', 'placeholder'=>'Orno')); ?>
			                </div>
	                <!-- /.input group -->
	              </div>


	               <div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
	                      <label>Schedule :</label>
		                   <div class="input-group">
			                   <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                   </div>
				                 <?php echo Form::input('schedule', Input::post('schedule', $schedule ), array('class' => 'col-md-4 form-control', 'type'=>'date')); ?>
			                </div>
	                <!-- /.input group -->
	              </div>

             </div> 
              <!-- /.form group -->
             <div class="row">
		              <div class="form-group col-md-3 col-sm-3">
		                <label>First Name:</label>

		                <div class="input-group">
		                  <div class="input-group-addon">
		                    <i class="fa fa-user"></i>
		                  </div>
		                  <?php if (Auth::get('group') == 50): ?>
		                  	<?php 
		                  		$firstname = Auth::get('firstname');
		                  		$middlename = Auth::get('middlename');
		                  		$lastname = Auth::get('lastname');
		                  	 ?>	
		                  <?php endif ?>
		                 <?php echo Form::input('firstname', Input::post('firstname', $firstname), array('class' => 'col-md-4 form-control','readonly'=>'readonly', 'placeholder'=>'Firstname')); ?>
		                </div>
		                <!-- /.input group -->
		              </div>

		              <div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
		                <label>Middle Name:</label>

		                <div class="input-group">
		                  <div class="input-group-addon">
		                    <i class="fa fa-user"></i>
		                  </div>
		               	<?php echo Form::input('middlename', Input::post('middlename', $middlename), array('class' => 'col-md-4 form-control','readonly'=>'readonly', 'placeholder'=>'Middlename')); ?>
		                </div>
		                <!-- /.input group -->
		              </div>

		                <div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
			                <label>Last Name:</label>

			                <div class="input-group">
			                  <div class="input-group-addon">
			                    <i class="fa fa-user"></i>
			                  </div>
			             		  <?php echo Form::input('lastname', Input::post('lastname', $lastname), array('class' => 'col-md-4 form-control','readonly'=>'readonly', 'placeholder'=>'Lastname')); ?>
			                </div>
			                <!-- /.input group -->
		               </div>

		               <div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
			                <label>Address:</label>

			                <div class="input-group">
			                  <div class="input-group-addon">
			                    <i class="fa fa-user"></i>
			                  </div>
			             		  <?php echo Form::input('address', Input::post('address', $address), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>
			                </div>
			                <!-- /.input group -->
		               </div>
              </div>

              <div class="row">
	              	<div class="form-group col-md-3 col-sm-3">
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

					<div class="form-group col-md-3 col-sm-3" style="margin-left:10px;" >
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

					<div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
						<?php echo Form::label('Dateofbirth', 'dateofbirth', array('class'=>'control-label')); ?>
						<input type="date" name="dateofbirth" class="col-md-4 form-control" value="<?php echo $dateofbirth;?>" >
					</div>

					<div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
					<?php echo Form::label('Contactnumber', 'contactnumber', array('class'=>'control-label')); ?>
					<?php echo Form::input('contactnumber', Input::post('contactnumber', $contactnumber), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactnumber')); ?>
					</div>

              </div>
               <div class="row">
              		<div class="form-group col-md-3 col-sm-3">
						<?php echo Form::label('Place of birth', 'placeofbirth', array('class'=>'control-label')); ?>

							<?php echo Form::input('placeofbirth', Input::post('placeofbirth', $placeofbirth), array('class' => 'col-md-4 form-control', 'placeholder'=>'Placeofbirth')); ?>
					</div>
					<div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
						<?php echo Form::label('Com tax no:', 'comtaxno', array('class'=>'control-label')); ?>

							<?php echo Form::input('comtaxno', Input::post('comtaxno', $comtaxno), array('class' => 'col-md-4 form-control', 'placeholder'=>'Comtaxno')); ?>

					</div>
					<div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
						<?php echo Form::label('Issued at', 'issuedat', array('class'=>'control-label')); ?>

							<?php echo Form::input('issuedat', Input::post('issuedat', $issuedat), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedat')); ?>

					</div>

					<div class="form-group col-md-3 col-sm-3" style="margin-left: 10px;">
						<?php echo Form::label('Issuedon', 'issuedon', array('class'=>'control-label')); ?>

							<?php echo Form::input('issuedon', Input::post('issuedon',$issuedon), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issuedon','type'=>'date')); ?>

					</div>
				</div>
				<div class="row">
						<div class="form-group col-md-12">
							<?php echo Form::label('Purpose', 'purpose', array('class'=>'control-label')); ?>

								<?php //echo Form::textarea('purpose', Input::post('purpose', $purpose), array('class' => 'col-md-8 form-control', 'rows' => 3, 'placeholder'=>'Purpose')); ?>
								<select class="form-control" name="purpose" id="purpose">
									<?php
										$selected = "";
										if (isset($purpose)) {
											if ($purpose == "Local Employment") {
												$selected = "selected";
											}
											if ($purpose == "Drivers License") {
												$selected = "selected";
											}
											if ($purpose == "Bank Requirement") {
												$selected = "selected";
											}
											if ($purpose == "Personal Identification") {
												$selected = "selected";
											}
											if ($purpose == "SSS Requirements") {
												$selected = "selected";
											}
											if ($purpose == "School Requirement") {
												$selected = "selected";
											}
											if ($purpose == "FED / FEU Requirement") {
												$selected = "selected";
											}
											if ($purpose == "Travel and Employment Abroad") {
												$selected = "selected";
											}
											if ($purpose == "Visa and Passport Requirements") {
												$selected = "selected";
											}
											if ($purpose == "Immigration  Requirement") {
												$selected = "selected";
											}
											if ($purpose == "Change of entry birth cirtificate correction") {
												$selected = "selected";
											}
											if ($purpose == "Seamans Visa") {
												$selected = "selected";
											}
											if ($purpose == "Fiancee Visa") {
												$selected = "selected";
											}
											if ($purpose == "Adoption Requirement") {
												$selected = "selected";
											}
											if ($purpose == "Firearms License") {
												$selected = "selected";
											}
										}
									 
									 ?>
									<option $selected >Local Employment</option>
									<option $selected >Drivers License</option>
									<option $selected >Bank Requirement</option>
									<option $selected >Personal Identification</option>
									<option $selected >SSS Requirements</option>
									<option $selected >School Requirement</option>
									<option $selected >FED / FEU Requirement</option>
									<option $selected >Travel and Employment Abroad</option>
									<option $selected >Visa and Passport Requirements</option>
									<option $selected >Immigration  Requirement</option>
									<option $selected >Change of entry birth cirtificate correction</option>
									<option $selected >Seamans Visa</option>
									<option $selected >Fiancee Visa</option>
									<option $selected >Adoption Requirement</option>
									<option $selected >Firearms License</option>
								</select>
								</div>
				    </div>
					<div class="row">
						<div class="col-md-3 col-sm-3">		
								<label>Payment</label>
								<input type="text" name="payment" id="payment"  style="text-align:left !important;" class="form-control" readonly="" value="<?php if (isset($payment)){echo $payment;}?>">	
						</div>
					</div>	
					<hr>	
					<div class="row">
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