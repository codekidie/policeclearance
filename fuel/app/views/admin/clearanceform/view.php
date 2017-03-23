
<?php if ($clearanceform->isprinted != 1): ?>
	<button class="btn btn-info" id="printerbuton" onclick="printclearance(<?php echo $clearanceform->id; ?>)" style="float: right;"><i class="fa fa-fw fa-print"></i> Print</button>
<?php endif ?>


<div id="myElementId">



<table class="table wrap-print">
	<tr><td>File No :</td><td><?php echo $clearanceform->id; ?></td><td>OR No :</td><td><?php echo $clearanceform->orno; ?></td></tr>
	<tr><td>Full Name :</td><td><?php echo $clearanceform->lastname.", ".$clearanceform->firstname." ".$clearanceform->middlename; ?></td></tr>
	<tr><td>Address :</td><td><?php echo $clearanceform->address; ?></td> <td>Phone Number : </td><td><?php echo $clearanceform->contactnumber; ?></td></tr>
	<tr><td>Sex :</td><td><?php echo $clearanceform->sex; ?></td><td>Civil Status:</td><td><?php echo $clearanceform->civilstatus; ?></td></tr>
	<tr><td>Date Of Bith :</td><td><?php echo $clearanceform->dateofbirth; ?></td><td>Place of Birth</td><td><?php echo $clearanceform->placeofbirth; ?></td></tr>
	<tr><td>Comm tax no (Sedula) :</td><td><?php echo $clearanceform->comtaxno; ?></td><td>Issued at :</td><td><?php echo $clearanceform->issuedat; ?></td><td>Issued On :</td><td><?php echo $clearanceform->issuedon; ?></td></tr>
	<tr><td >Purpose on securing clearance :</td><td ><?php echo $clearanceform->purpose; ?></td></tr>
</table>
	

			<p  style="border-top:1px solid #000;text-align: center;width:200px;margin:20px;float: right;">Contact Number</p>

			<br class="clear-fix">

</div>
	

<?php echo Html::anchor('admin/clearanceform/edit/'.$clearanceform->id, 'Edit',array('class'=>'btn btn-info')); ?> |
<?php echo Html::anchor('admin/clearanceform', 'Back',array('class'=>'btn btn-info')); ?>