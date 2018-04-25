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
                            <img src="<?php echo base_url().'profile/'.$foto; ?>" style="width: 50px; border-radius: 50%; box-shadow: 0px 0px 1px 1px #ccc;"> 
                            &emsp; <?php echo "Welcome <i style='color: #999;'>".$full_name."</i>"; ?></a></div>
						<div class="header__menu">
							
							<!-- onepage-nav -->
							<nav class="onepage-nav">
								
								<!-- onepage-menu -->
								<ul class="onepage-menu">
									<li><a href="<?php echo base_url('Activity');?>" style="color: #333;">List Activity</a>
									</li>
									<li class="current-menu-item"><a href="<?php echo base_url('Activity/page_create');?>" style="color: #333;">Create Activity</a>
									</li>
									<li><a href="#id-3" style="color: #333;">Joined</a>
									</li>
									<li><a href="<?php echo base_url('Welcome/logout');?>" style="color: red;">Logout</a>
									</li>
								</ul><!-- onepage-menu -->
								
								<div class="navbar-toggle"><span></span><span></span><span></span></div>
							</nav><!-- End / onepage-nav -->
							
						</div>
					</div>
				</div>
			</header><!-- End / header -->


            <div class="container" style="padding-bottom: 50px;">   
                <div id="signupbox" style="margin-top:30px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Create an Activity</div>
                        </div>  
                        <div class="panel-body" >
                        <?php echo form_open_multipart('Activity/create');?>
                            <div id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>

                                  
                                <div class="form-group" style="margin-left: 50px!important;">
                                    <label>Add Picture</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input name="picture" type="file" id="imgInp">
                                            </span>
                                        </span>
                                        <input id='urlname' type="text" style="height: 34px!important; width: 79%" readonly>
                                <button id="clear" class="btn btn-default">Clear</button>
                                    </div>
                                    <img id='img-upload'/>
                                </div>


                                <div class="form-group">
                                    <label for="title" class="col-md-3 control-label">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="date" class="col-md-3 control-label">Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="location" class="col-md-3 control-label">Location</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="location">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-md-3 control-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" rows="50" cols="50"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp; Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                         </div>
                    </div>
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