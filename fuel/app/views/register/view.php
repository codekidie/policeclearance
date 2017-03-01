<h2>Viewing <span class='muted'>#<?php echo $register->id; ?></span></h2>

<p>
	<strong>Username:</strong>
	<?php echo $register->username; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $register->password; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $register->group; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $register->email; ?></p>
<p>
	<strong>Last login:</strong>
	<?php echo $register->last_login; ?></p>
<p>
	<strong>Login hash:</strong>
	<?php echo $register->login_hash; ?></p>
<p>
	<strong>Profile fields:</strong>
	<?php echo $register->profile_fields; ?></p>

<?php echo Html::anchor('register/edit/'.$register->id, 'Edit'); ?> |
<?php echo Html::anchor('register', 'Back'); ?>