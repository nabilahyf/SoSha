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
						<div class="header__logo"><a href="" style="font-size: 11.5pt;">
                            <img src="<?php echo base_url().'profile/'.$foto; ?>" style="width: 50px; border-radius: 50%; box-shadow: 0px 0px 1px 1px #ccc;"> 
                            &emsp; <?php echo "Welcome <i style='color: #ccc;'><sub>".$this->session->full_name."</sub></i>"; ?></a></div>
						<div class="header__menu">
							
							<!-- onepage-nav -->
							<nav class="onepage-nav">
								
								<!-- onepage-menu -->
								<ul class="onepage-menu">
									<li><a href="<?php echo base_url('Activity');?>" style="color: #333;">All Activity</a>
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

			<div class="container" style="padding-bottom: 50px;"> 
				<div class='col-lg-6'>
						<h4>My Profile</h4>
						<div class="row">
							<div class="span2 col-lg-6" style="padding-top: 5%;" "padding-left: 5%;">
								<img src="<?php echo base_url().'profile/'.$foto; ?>"  alt="" class="col-lg-12" style='margin-top: -30px; margin-left: -15px;'><br/>
								<a href="#" onclick="$('#update_profil').fadeToggle('slow'); $('#update_password').hide('slow');">Update Profil</a> | <a href='#' onclick="$('#update_password').fadeToggle('slow');$('#update_profil').hide('slow');">Change Password</a>
							</div>
						<div class="col-lg-6">
							<table class="table">
								<tbody>
								<tr>
									<td>Name</td>
									<td><?php echo $full_name; ?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><?php echo $email; ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><?php echo $alamat; ?></td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td><?php echo $no_tlp; ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td><?php echo $jenkel; ?></td>
								</tr>
								<tr>
									<td>TTL</td>
									<td><?php echo $birthday; ?></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class='col-lg-6' id='update_profil' style='display: none;'>
					<?php echo form_open_multipart('Activity/update_profil');?>
						<div class="modal-body" style="height: 235px; overflow-y: auto; padding: 0 20px 20px 20px; margin-top: 10%;">
															
							
							<input type="hidden" name="id" value="<?php echo $user_id; ?>" required>
							<input type="hidden" name="old_profil" value="<?php echo $foto; ?>" required>

                                  
							<div class="form-group">
							<label>Change Picture</label>
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-default btn-file">
										Browse… <input name="gambar" type="file" id="imgInp">
									</span>
								</span>
								<input id='urlname' type="text" style="height: 34px!important; width: 83%;; font-size: 9pt; color :#666;" readonly>
							<button id="clear" class="btn btn-default">Clear</button>
								</div>
								<img id='img-upload'/>
							</div>

							<label for="email"><b>Email</b></label>
							<input type="email" placeholder="Ketikan email Anda" name="email" value="<?php echo $email; ?>" required>

							<label for="fullname"><b>Full name</b></label>
							<input type="text" placeholder="Ketikan nama lengkap Anda" name="fullname" value="<?php echo $full_name; ?>" required>

							<label for="tlp"><b>no tlp</b></label>
							<input type="text" placeholder="Ketikan nomor telepon Anda" name="tlp" value="<?php echo $no_tlp; ?>" required>

							<label for="gender"><b>Jenis Kelamin</b></label>
							<br/>
							<?php if(strtoupper($jenkel) == 'L'){?>
								<input type="radio" name="gender" value="L" checked> Laki-laki<br>
								<input type="radio" name="gender" value="P"> Perempuan<br>
								<input type="radio" name="gender" value="O"> Lainnya
							<?php }else if(strtoupper($jenkel) == 'P'){ ?>
								<input type="radio" name="gender" value="L"> Laki-laki<br>
								<input type="radio" name="gender" value="P" checked> Perempuan<br>
								<input type="radio" name="gender" value="O"> Lainnya
							<?php }else{ ?>
								<input type="radio" name="gender" value="L"> Laki-laki<br>
								<input type="radio" name="gender" value="P"> Perempuan<br>
								<input type="radio" name="gender" value="O" checked> Lainnya
							<?php } ?>

							<br/>
							<label for="ttl"><b>Tempat/tgl lahir</b></label>
							<input type="text" placeholder="Ketikan tempat dan tanggal lahir Anda" name="ttl" value="<?php echo $birthday; ?>" required>

							<label for="alamat"><b>Alamat lengkap</b></label>
							<textarea rows="4" cols="50" name="alamat"> <?php echo $alamat; ?></textarea>
							<br/><br/>
								
						</div>

						<div class="modal-footer">
						<button type="submit" name="update" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>

				<div class='col-lg-6' id='update_password' style='display: none;'>
					<?php echo form_open_multipart('Activity/update_password');?>
						<div class="modal-body" style="height: 235px; overflow-y: auto; padding: 0 20px 20px 20px; margin-top: 10%;">
															
							
							<input type="hidden" name="id" value="<?php echo $user_id; ?>" required>

							<label for="old"><b>Old password</b></label>
							<input type="password" name="old" required>

							<label for="new"><b>New password</b></label>
							<input type="password" name="new" required>

							<label for="retype"><b>Retype password</b></label>
							<input type="password" name="retype" required>
								
						</div>

						<div class="modal-footer">
						<button type="submit" name="update" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
			</div>
          
			
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