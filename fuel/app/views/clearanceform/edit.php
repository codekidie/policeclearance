<h2>Editing <span class='muted'>Clearanceform</span></h2>
<br>

<?php echo render('clearanceform/_form'); ?>
<p>
	<?php echo Html::anchor('clearanceform/view/'.$clearanceform->id, 'View'); ?> |
	<?php echo Html::anchor('clearanceform', 'Back'); ?></p>
