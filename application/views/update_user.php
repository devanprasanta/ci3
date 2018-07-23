<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>B A L I</title>

    <link rel="stylesheet" href="<?php echo base_url("/"); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("/"); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url("/"); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url("/"); ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("/"); ?>assets/css/font-awesome.css" type="text/css">  


    </head>
  <body>
 
  <nav class="navbar navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<?php $this->load->view('menu') ?>
			</div>   
		</div>
	</nav>    				
</div>
<main role="main" class="container">
	<section class="jumbotron text-center">
		<div class="container">
			Update User
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">

					<?php echo form_open( '', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $user->username ?>" required>
						<div class="invalid-feedback">Isi judul dulu</div>
					</div>
					<div class="form-group">
						<label for="text">password</label>
						<input type="text" class="form-control" name="password" value="<?php echo $user->password ?>" required>
						<div class="invalid-feedback">Isi deskripsinya dulu</div>
					</div>
					<div class="form-group">
						<label for="">Level</label>
						<select name="level" class="form-control">
							<option value="1">Admin</option>
							<option value="2">User</option>
						</select>
					</div>
					<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</section>
</main>
<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>
  </body>
</html>