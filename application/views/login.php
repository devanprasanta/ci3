<form action="<?php echo base_url('index.php/Login') ?>" method="post">
	<?php echo validation_errors(); ?>
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit">
</form>