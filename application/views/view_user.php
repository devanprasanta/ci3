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
			Tambah user
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
				<a href="<?php echo base_url('index.php/User/insert'); ?>" class="btn btn-primary">Tambah</a>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $key => $value): ?>
					<tr>
						<td><?php echo $key++; ?></td>
						<td><?php echo $value->username ?></td>
						<td><?php echo $value->password ?></td>
						<td><?php echo $value->level ?></td>
						<td>
							<a href="<?php echo base_url("index.php/User/update/".$value->id); ?>" class="btn btn-success btn-sm">Update</a>
							<a href="<?php echo base_url("index.php/User/delete/".$value->id); ?>" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
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