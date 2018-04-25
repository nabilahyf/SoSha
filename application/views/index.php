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
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/pe-icon/pe-icon.css">
		<!-- Vendors-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/swiper/swiper.css">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css"><!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap">
		
			
			<!-- header -->
			<header class="header header--fixed">
				<div class="container">
					<div class="header__inner">
						<div class="header__logo"><a href="" style="font-size: 11pt;"><img src="assets/img/logo.jpeg" width="70px" alt=""/> Social Sharing and Caring</a></div>
						<div class="header__menu">
							
							<!-- onepage-nav -->
							<nav class="onepage-nav">
								
								<!-- onepage-menu -->
								<ul class="onepage-menu">
									<li class="current-menu-item"><a href="#id-1" style="color: #333;">Home</a>
									</li>
									<li><a href="#id-2" style="color: #333;">About</a>
									</li>
									<li><a href="#id-3" style="color: #333;">Article</a>
									</li>
									<li><a href="#id-4" style="color: #333;">Contact</a>
									</li>
									<li><a href="#id-5" style="color: #333;" data-toggle="modal" data-target="#myLogin">Join Us</a>
									</li>
								</ul><!-- onepage-menu -->
								
								<div class="navbar-toggle"><span></span><span></span><span></span></div>
							</nav><!-- End / onepage-nav -->
							
						</div>
					</div>
				</div>
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="md-content">
				
				<!-- hero -->
				<div class="hero" id="id-1" style="background-image: url('assets/img/bg/header2.jpg');">
					<div class="hero__wrapper">
						<div class="container">
							<div class="row">
								<div class="col-lg-12" style="padding-top: 80px;">
									<h4 class="hero__title" style='font-size: 48pt;'>Welcome to SoSha
										<br/>
																				
										<!-- typing__module -->
										<div class="typing__module" data-options='{"typeSpeed":60}' style="font-size: 28pt;">
											<
											<div class="typed-strings"><span>Social Sharing</span><span>Social Caring</span>
											</div><span class="typed"></span>
											>
										</div><!-- End / typing__module -->
										
									</h4>
									<p class="hero__text" style="margin-top: 35px;">
										Ayo berbagi kebahagiaan kepada sesama.  
										
									</p>
								</div>
							</div><span id="back-to-down"><i class="pe-7s-angle-down"></i></span>
						</div>
					</div>
					
					<!-- Trigger the modal with a button -->

					<!-- Modal Log in-->
					<div class="modal fade" id="myLogin" role="dialog">
						<div class="modal-dialog">
						
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sign in</h4>
							</div>
							<div class="modal-body">
							<?php echo form_open_multipart('Welcome/login');?>
								<div class="imgcontainer">
									<img src="assets/img/img_avatar2.png" alt="Avatar" class="avatar" style="border-radius: 50%; width: 150px; margin-bottom: 20px; margin-left: 35%;">
								</div>

									<label for="email"><b>Email</b></label>
									<input type="text" placeholder="Enter Email" name="email" required>

									<label for="password"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="password" required>
										
									<div class="modal-footer">
									<span style="float: left;">Don't have an account? Sign up as <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#mySignUpVolunteer">Volunteer</a></span>
									<button type="submit" name="login" class="btn btn-default">Submit</button>
									</div>
								</form>
							</div>
						</div>
						
						</div>
					</div>

					<!-- Modal Sign Up Volunteer-->
					<div class="modal fade" id="mySignUpVolunteer" role="dialog">
						<div class="modal-dialog">
						
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Registration</h4>
							</div>
							<?php echo form_open_multipart('Welcome/regist_volunteer');?>
								<div class="modal-body" style="height: 435px; overflow-y: auto; padding: 20px;">
																	
									<label for="gambar"><b>Foto Profil</b></label>
									<input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" style="border-width: 0px!important;"/>
									<br/>

									<label for="email"><b>Email</b></label>
									<input type="email" placeholder="Ketikan email Anda" name="email" required>

									<label for="password"><b>Password</b></label>
									<input type="password" placeholder="Ketikan password Anda" name="password" required>

									<label for="retype"><b>Retype Password</b></label>
									<input type="password" placeholder="Ketikan email Anda lagi" name="retype" required>

									<label for="fullname"><b>Full name</b></label>
									<input type="text" placeholder="Ketikan nama lengkap Anda" name="fullname" required>

									<label for="tlp"><b>no tlp</b></label>
									<input type="text" placeholder="Ketikan nomor telepon Anda" name="tlp" required>

									<label for="gender"><b>Jenis Kelamin</b></label>
									<br/>
									<input type="radio" name="gender" value="L"> Laki-laki<br>
									<input type="radio" name="gender" value="P"> Perempuan<br>
									<input type="radio" name="gender" value="O"> Lainnya

									<br/>
									<label for="ttl"><b>Tempat/tgl lahir</b></label>
									<input type="text" placeholder="Ketikan tempat dan tanggal lahir Anda" name="ttl" required>

									<label for="alamat"><b>Alamat lengkap</b></label>
									<textarea rows="4" cols="50" name="alamat">Jln. </textarea>
									<br/><br/>
										
								</div>

								<div class="modal-footer">
								<span style="float: left;">Back to <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myLogin">Sign in</a></span>
								<button type="submit" name="regist_volunteer" class="btn btn-default">Submit</button>
								</div>
							</form>
						</div>
						
						</div>
					</div>

				</div><!-- End / hero -->
				
				
				<!-- Section -->
				<section class="md-section bg-gray" id="id-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 ">
								
								<!-- slide-image -->
								<div class="slide-image">
									
									<!-- swiper__module swiper-container -->
									<div class="swiper__module swiper-container slide-image__front" data-options='{"slidesPerView":1,"spaceBetween":0}'>
										<div class="swiper-wrapper">
											<div class="slide-item" style="background-image: url('assets/img/about/1.jpg');"></div>
											<div class="slide-item" style="background-image: url('assets/img/about/2.jpg');"></div>
											<div class="slide-item" style="background-image: url('assets/img/about/3.jpg');"></div>
										</div>
										<div class="swiper-pagination-custom"></div>
									</div><!-- End / swiper__module swiper-container -->
									
									
									<!-- swiper-thumbnails__module swiper-container -->
									<div class="swiper-thumbnails__module swiper-container slide-image__black" data-options='{"slidesPerView":1,"spaceBetween":0,"delay":10000}'>
										<div class="swiper-wrapper">
											<div class="slide-item" style="background-image: url('assets/img/about/1b.jpg');"></div>
											<div class="slide-item" style="background-image: url('assets/img/about/2b.jpg');"></div>
											<div class="slide-item" style="background-image: url('assets/img/about/3b.jpg');"></div>
										</div>
									</div><!-- End / swiper-thumbnails__module swiper-container -->
									
								</div><!-- End / slide-image -->
								
							</div>
							<div class="col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">Hello from Armando</h2>
								</div><!-- End / title -->
								
								<p class="fz-16">Duis porttitor libero ac egestas euismod. Maecenas quis felis turpis. Nulla quis turpis sed augue</p>
								<p class="fz-16">Curabitur elementum urna augue, eu porta purus gravida in. Cras consectetur, lorem a cursus vestibulum, ligula purus iaculis nulla, in dignissim risus turpis id justo. Sed eleifend ante et ligula eleifend ultricies. Fusce porta feugiat nisl, eget faucibus augue ultrices et. Nullam id leo fringilla,</p>
							</div>
						</div>
						
						<!-- swiper__module swiper-container -->
						<div class="swiper__module swiper-container mt-50" data-options='{"slidesPerView":3,"spaceBetween":30,"autoplay":2000,"breakpoints":{"640":{"slidesPerView":1},"991":{"slidesPerView":2}}}'>
							<div class="swiper-wrapper">
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-paint-bucket"></i></div>
									<h3 class="service__title">Social Media</h3>
									<p class="service__text">Suspendisse ac elit vitae est lacinia interdum eu sit amet mauris. Phasellus</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-paint-bucket"></i></div>
									<h3 class="service__title">Social Media</h3>
									<p class="service__text">Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-lintern"></i></div>
									<h3 class="service__title">Investment Planning</h3>
									<p class="service__text">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque.</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-gleam"></i></div>
									<h3 class="service__title">Risk Management</h3>
									<p class="service__text">Curabitur elementum urna augue, eu porta purus gravida in. Cras consectetur,</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-anchor"></i></div>
									<h3 class="service__title">Marketing Planning</h3>
									<p class="service__text">Duis porttitor libero ac egestas euismod. Maecenas quis felis turpis. Nulla quis</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-refresh"></i></div>
									<h3 class="service__title">Site Security</h3>
									<p class="service__text">Etiam non varius justo, vel tempor mi. Nulla facilisi. Fusce at tortor arcu.</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-joy"></i></div>
									<h3 class="service__title">Risk Management</h3>
									<p class="service__text">Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-lock"></i></div>
									<h3 class="service__title">Investment Planning</h3>
									<p class="service__text">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque.</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service mb-0">
									<div class="service__icon"><i class="pe-7s-magnet"></i></div>
									<h3 class="service__title">Site Security</h3>
									<p class="service__text">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus</p>
								</div><!-- End / service -->
								
							</div>
						</div><!-- End / swiper__module swiper-container -->
						
					</div>
				</section>
				<!-- End / Section -->
				
				
				<!-- Section -->
				<section class="md-section" id="id-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">Article</h2>
								</div><!-- End / title -->
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 ">
								
								<!--  -->
								<div>
									<div class="post__media"><img src="assets/img/blog/1a.jpg" alt=""/></a></div>
									<div class="post__body">
										<h2 class="post__title"><a href="https://medium.com/@TERRAITB/pengabdian-masyarakat-dan-mahasiswa-5b230763ad6">Kegiatan Pengabdian Masyarakat oleh Mahasiswa ITB</a></h2>
										<div class="post__meta"><span class="author">Sisca A.R</span><span class="date">Jan 3, 2018</span></div>
										<p class="post__text">Pengabdian masyarakat adalah bentuk aktualisasi dan eskalasi potensi dalam diri mahasiswa dengan ilmu yang sudah diterima, alangkah baiknya pengabdian masyarakat dikemas dengan bentuk yang sangat simpel dan sederhana tetapi menjawab permasalahan yang berada di masyarakat danmemiliki efek yang berkelanjutan. Mengingat bahwa kondisi kesibukan mahasiswa dan adanya tanggung jawab sosial, moral dan intelektual dalam melaksanakan pengabdian masyarakat, maka terdapat beberapa bentuk pengabdian masyarakat</p>
									</div>
								</div><!-- End /  -->
								
							</div>
							<div class="col-lg-4 ">
								
								<!--  -->
								<div>
									<div class="post__media"><a href="#"><img src="assets/img/blog/2a.jpg" alt=""/></a></div>
									<div class="post__body">
										<h2 class="post__title"><a href="https://moestopo.ac.id/2016/12/pengabdian-kepada-masyarakat-dan-bakti-sosial-mahasiswa-baru-angkatan-2016-fikom-updmb/">Penyuluhan Kesehatan di SDN Tegal Jaya 2 oleh para Tim Medis</a></h2>
										<div class="post__meta"><span class="author">Sisca A.R</span><span class="date">Jan 21, 2018</span></div>
										<p class="post__text">Acara penyuluhan “Kesehatan dan Gigi” dilakukan di SDN Tegal Jaya 2 Kampung Nagrog Desa Tegal dengan Tim Medis dari FKG dan RSGM UPDM(B) dengan peserta siswa siswa SDN Tegal Jaya 2 yang antusias dengan kegiatan ini. Dilantai 2 SDN yang sama dilakukan Pelatihan Pembuatan Data Base Administrasi Kependudukan oleh Dosen Universitas Terbuka yaitu Drs. Warsito, M.Pd (Instruktur Pelatihan Pengembangan Data Base Kependudukan UT) dan Drs. Sumartono, M.Si yang didampingi oleh tim penyuluh Drs. Bambang Sudiono, Juni Muryadi, S.Sos dan Drs. Sulfahlevi, MM. </p>
									</div>
								</div><!-- End /  -->
								
							</div>
							<div class="col-lg-4 ">
								
								<!--  -->
								<div>
									<div class="post__media"><a href="#"><img src="assets/img/blog/3a.jpg" alt=""/></a></div>
									<div class="post__body">
										<h2 class="post__title"><a href="https://rsazra.co.id/rsazra/index.php/30/jumatberkah-acara-santunan-anak-yatim-dan-dhuafa-oleh-rumah-sakit-azra-bogor/">Lebih dekat dengan sesama dalam acara santunan bersama anak yatim piatu</a></h2>
										<div class="post__meta"><span class="author">Sisca A.R</span><span class="date">Jan 23, 2018</span></div>
										<p class="post__text">Rumah Sakit Azra Bogor menggelar acara rutin setiap bulan yaitu melakukan acara santunan kepada anak yatim dan dhuafa disekitar Rumah Sakit Azra. Acara tersebut digelar dalam rangka bentuk kepedulian Rumah Sakit Azra terhadap warga sekitar</p>
									</div>
								</div><!-- End /  -->
								
							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				
				
				<!-- Section -->
				<section class="md-section" id="id-5">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">Get in touch</h2>
								</div><!-- End / title -->
								
								<div class="mb-40">
									
									<!-- contact -->
									<div class="contact">
										<h3 class="contact__title">address</h3>
										<div>Division No. 10, Subd. D, Newfoundland and Labrador, Canada</div>
									</div><!-- End / contact -->
									
									
									<!-- contact -->
									<div class="contact">
										<h3 class="contact__title">email</h3>
										<div><a href="">info@awe7.com</a></div>
									</div><!-- End / contact -->
									
									
									<!-- contact -->
									<div class="contact">
										<h3 class="contact__title">phone</h3>
										<div>+61 1900 654 321</div>
									</div><!-- End / contact -->
									
								</div>
							</div>
							<div class="col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">Or drop a message</h2>
								</div><!-- End / title -->
								
								<div class="form-wrapper">
									
									<!-- form-item -->
									<div class="form-item form-item--half">
										<label class="form__label">email,<span>*</span>
										</label>
										<input class="form-control" type="text" name="input" placeholder=""/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item form-item--half">
										<label class="form__label">Name,<span>*</span>
										</label>
										<input class="form-control" type="text" name="input" placeholder=""/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<label class="form__label">message<span>*</span>
										</label>
										<textarea class="form-control"></textarea>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<a class="md-btn btn-custom" href="#">Send message
										</a>
									</div><!-- End / form-item -->
									
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				
			</div>
			<!-- End / Content-->
			
			<!-- footer -->
			<div class="footer">
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
						<p class="footer__copy">2018 &copy; Copyright Awe7. All rights Reserved.</p>
					</div>
				</div>
			</div><!-- End / footer -->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="assets/vendors/jquery/jquery.min.js"></sc
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>ript>
		<script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.easing/jquery.easing.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="assets/vendors/typed/typed.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>