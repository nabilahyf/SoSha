<!DOCTYPE html>
<html>
	<head>
		<title>Sosha - Social Sharing and Caring</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpeg" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/fontawesome/font-awesome.min.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/pe-icon/pe-icon.css'; ?>">
		<!-- Vendors-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendors/bootstrap/grid.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendors/magnific-popup/magnific-popup.min.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendors/swiper/swiper.css'; ?>">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/upload.cs'; ?>s"><!--[if lt IE 9]>        
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap">
		
			
			<!-- header -->
			<header class="header " style="box-shadow: 0 4px 2px -2px #ccc;">
				<div class="container">
					<div class="header__inner">
						<div class="header__logo"><a href="<?php echo base_url('Activity/profile');?>" style="font-size: 11.5pt;">
                            <img src="<?php echo base_url().'profile/'.$this->session->foto; ?>" style="width: 50px; border-radius: 50%; box-shadow: 0px 0px 1px 1px #ccc;"> 
                            &emsp; <?php echo "Welcome <i style='color: #999;'>".$this->session->full_name."</i>"; ?></a></div>
						<div class="header__menu">
							
							<!-- onepage-nav -->
							<nav class="onepage-nav">
								
								<!-- onepage-menu -->
								<ul class="onepage-menu">
									<li class="current-menu-item"><a href="<?php echo base_url('Activity');?>" style="color: #333;">All Activity</a>
									</li>
									<li><a href="<?php echo base_url('Activity/mine');?>" style="color: #333;">Mine</a>
									</li>
									<li><a href="<?php echo base_url('Activity/page_create');?>" style="color: #333;">Create Activity</a>
									</li>
									<li><a href="<?php echo base_url('Activity/page_join'); ?>" style="color: #333;">Joined 
										<?php if($this->session->status_join == 1){
												echo "<sup style='font-size: 8pt; color: red;'> NEW</sup></a>";
											   }else{
												echo "<sup style='font-size: 8pt; color: blue;'></sup></a>";												   
											   }
										?>
									</li>
									<li><a href="<?php echo base_url('Welcome/logout');?>" style="color: orange;">Logout</a>
									</li>
								</ul><!-- onepage-menu -->
								
								<div class="navbar-toggle"><span></span><span></span><span></span></div>
							</nav><!-- End / onepage-nav -->
							
						</div>
					</div>
				</div>
			</header><!-- End / header -->


            <div class="container" style="padding-bottom: 20px; padding-top: 50px;"> 

                
				<?php 
					foreach($kegiatan as $u){ 
				?>

				<div class="col-lg-12" style="border-bottom: 1px solid #ccc; padding-bottom: 20px;">
					<div class="col-lg-2" style="margin-left: -28px;">
						<img src="<?php echo base_url().'acara/'.$u->gambar ?>">
					</div>
					<div class="col-lg-5" style="margin-top: -5px; font-size: 9.5pt;">
						Judul &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : <?php echo $u->title; ?><br/>
						Penyelenggara &emsp; : <?php echo $u->full_name; ?> <br/>
						Lokasi&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $u->tempat; ?> <br/>
						Tanggal &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;:  <?php echo $u->tanggal; ?><br/>
						Sisa Kuota &emsp;&emsp;&emsp;&ensp;&nbsp;:  <?php echo $u->slot; ?>
					</div>
					<div class="col-lg-5" style="margin-top: -5px; right: -50px; font-size: 9.5pt; max-height: 100px; overflow-y: auto;">
						<?php echo $u->description; ?>
					</div>
				</div>         
				<div class="col-lg-12" style="margin-bottom: 50px;">
					<div class="col-lg-6" style="margin-left: -30px;">
						Created at :  <?php echo $u->created_at; ?>
					</div>
					<div class="col-lg-6" style="text-align: right; right: -60px;">
						<?php
							if($u->user_id != $this->session->user_id){
								echo "<a href='".base_url()."Activity/join/".$u->kegiatan_id."' style='color: orange;'>Join</a>";
							}else{
								echo "<a href='".base_url()."Activity/page_update/".$u->kegiatan_id."' >Update</a> | <a href='".base_url()."Activity/delete/".$u->kegiatan_id."' style='color: red;'>Delete</a>";
							}
						?>
					</div>
				</div>

				<?php
					}
				?>
            </div>


                <?php 
                  echo $this->pagination->create_links();
                ?>
    
			
			<!-- footer -->
			<div class="footer" style="margin-top: 50px;">
				<div id="back-to-top"><i class="pe-7s-angle-up"></i></div>
				<div class="container">
					<div class="footer__wrapper">
						<div class="footer__social">
										
										<!-- social-icon -->
										<a class="social-icon" href="#"><i class="social-icon__icon fa fa-facebook"></i>
										</a><!-- End / social-icon -->
										
										
										<!-- social-icon -->
										<a class="social-icon" href="#"><i class="social-icon__icon fa fa-twitter"></i>
										</a><!-- End / social-icon -->
										
										
										<!-- social-icon -->
										<a class="social-icon" href="#"><i class="social-icon__icon fa fa-linkedin"></i>
										</a><!-- End / social-icon -->
										
										
										<!-- social-icon -->
										<a class="social-icon" href="#"><i class="social-icon__icon fa fa-behance"></i>
										</a><!-- End / social-icon -->
										
										
										<!-- social-icon -->
										<a class="social-icon" href="#"><i class="social-icon__icon fa fa-vimeo"></i>
										</a><!-- End / social-icon -->
										
						</div>
						<p class="footer__copy">2018 &copy; Copyright SoSha. All rights Reserved.</p>
					</div>
				</div>
			</div><!-- End / footer -->

		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/jquery/jquery.min.js'; ?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/imagesloaded/imagesloaded.pkgd.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/isotope-layout/isotope.pkgd.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/jquery-one-page/jquery.nav.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/jquery.easing/jquery.easing.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/magnific-popup/jquery.magnific-popup.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/masonry-layout/masonry.pkgd.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/swiper/swiper.jquery.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/menu/menu.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendors/typed/typed.min.js'; ?>"></script>
		<!-- App-->
		<script type="text/javascript" src="<?php echo base_url().'assets/js/main.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/upload.js'; ?>"></script>
	</body>
</html>