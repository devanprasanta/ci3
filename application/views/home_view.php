<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>B A L I</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="aseets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css">  

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
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-281873">
				<ol class="carousel-indicators">
					</li>
					<li data-slide-to="2" data-target="#carousel-281873" class="active">
					</li>

				</ol>
				
					<div class="item active">
						<img alt="Carousel Bootstrap Third" src="assets/img/gambar1.jpg">
						<div class="carousel-caption">
							<h4>
								B A L I
							</h4>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-281873" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-281873" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>

	      <?php foreach ($artikel as $key): ?>

        <div class="well well-sm">
          <div class="row">
            <div class="col-sm-12 col-md-12">
            	<a href="About/detail/<?php echo $key->id_blog ?>" style="color"; black;">
             
              
              <img src='img/<?php echo $key->image;?>' alt="Image" width="500">
              <br>
               <h3><?php echo $key->judul ?></h3>
             </a>
             <br></b>
             <button>Edit</button>

             <!--<button>Delete</button> -->
             <a href='About/delete/<?php echo $key->id_blog;?>' class='btn btn-sm btn-danger'>Hapus</a>

              <p></a>
                diupload tanggal : <?php echo $key->tanggal ?><br>

                
              </p>
            </div>
          </div>
        </div>
        <?php endforeach ?>

        <!-- form untuk menambahkan data -->
    <div class="container">
      <?php
        echo form_open('about/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>