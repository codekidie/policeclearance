<h2>Viewing #<?php echo $clearanceform->id; ?></h2>

<p>
	<strong>Fileno:</strong>
	<?php echo $clearanceform->fileno; ?></p>
<p>
	<strong>Orno:</strong>
	<?php echo $clearanceform->orno; ?></p>
<p>
	<strong>Firstname:</strong>
	<?php echo $clearanceform->firstname; ?></p>
<p>
	<strong>Middlename:</strong>
	<?php echo $clearanceform->middlename; ?></p>
<p>
	<strong>Lastname:</strong>
	<?php echo $clearanceform->lastname; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $clearanceform->address; ?></p>
<p>
	<strong>Sex:</strong>
	<?php echo $clearanceform->sex; ?></p>
<p>
	<strong>Civilstatus:</strong>
	<?php echo $clearanceform->civilstatus; ?></p>
<p>
	<strong>Dateofbirth:</strong>
	<?php echo $clearanceform->dateofbirth; ?></p>
<p>
	<strong>Placeofbirth:</strong>
	<?php echo $clearanceform->placeofbirth; ?></p>
<p>
	<strong>Comtaxno:</strong>
	<?php echo $clearanceform->comtaxno; ?></p>
<p>
	<strong>Issuedat:</strong>
	<?php echo $clearanceform->issuedat; ?></p>
<p>
	<strong>Issuedon:</strong>
	<?php echo $clearanceform->issuedon; ?></p>
<p>
	<strong>Purpose:</strong>
	<?php echo $clearanceform->purpose; ?></p>
<p>
	<strong>Contactnumber:</strong>
	<?php echo $clearanceform->contactnumber; ?></p>

<?php echo Html::anchor('admin/clearanceform/edit/'.$clearanceform->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/clearanceform', 'Back'); ?>