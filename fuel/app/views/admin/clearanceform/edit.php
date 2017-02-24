<h2>Editing Clearance form</h2>
<br>

<?php echo render('admin/clearanceform/_form'); ?>
<p>
	<?php echo Html::anchor('admin/clearanceform/view/'.$clearanceform->id, 'View'); ?> |
	<?php echo Html::anchor('admin/clearanceform', 'Back'); ?></p>
