<ul class="nav navbar-nav">
					<li><a class="page-scroll" href="#carousel-281873">Home</a></li>
					<li><a class="page-scroll" href="#sejarah">About</a></li>
					<?php if ($this->session->userdata('level') ==1): ?>
							<li><a class="page-scroll" href="about">Blog</a></li>
					<li><a href="<?php echo base_url('home/kekategori');?>">Kategori</a></li>
					<li><a href="<?php echo base_url('user');?>">User</a></li>
						<?php endif ?>	
					<li><a class="page-scroll" href="login/logout">Logout</a></li>				
				</ul>