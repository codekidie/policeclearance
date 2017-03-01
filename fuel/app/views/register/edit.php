<h2>Editing <span class='muted'>Register</span></h2>
<br>

<?php echo render('register/_form'); ?>
<p>
	<?php echo Html::anchor('register/view/'.$register->id, 'View'); ?> |
	<?php echo Html::anchor('register', 'Back'); ?></p>
