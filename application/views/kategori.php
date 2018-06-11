<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>B A L I</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" type="text/css">  

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
			Tambah Kategori
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">

					<?php echo form_open( 'home/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

					<div class="form-group">
						<label for="cat_name">Nama Kategori</label>
						<input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
						<div class="invalid-feedback">Isi judul dulu</div>
					</div>
					<div class="form-group">
						<label for="text">Deskripsi</label>
						<input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
						<div class="invalid-feedback">Isi deskripsinya dulu</div>
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