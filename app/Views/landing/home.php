<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description"
		content="Livinus, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>
		<?= $title ?>
	</title>
	<!-- Stylesheets -->
	<link href="<?= base_url('public/landing') ?>/vendor/slick/slick.css" rel="stylesheet">
	<link href="<?= base_url('public/landing') ?>/vendor/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('public/landing') ?>/icons/style.css" rel="stylesheet">
	<link href="<?= base_url('public/landing') ?>/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css"
		rel="stylesheet">
	<link href="<?= base_url('public/landing') ?>/css/style.css" rel="stylesheet">
	<link href="<?= base_url('public/landing') ?>/color/color.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="<?= base_url('public/landing') ?>/images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page layout-landing-2">
	
	<!--header-->
	<header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-info"><i class="icon-placeholder2"></i>1560 Ekpo Abasi Lane
						</div>
						<div class="header-phone"><i class="icon-telephone"></i><a
								href="tel:+234-8104441263">+234-8104441263</a></div>
						<div class="header-info"><i class="icon-black-envelope"></i><a
								href="mailto:info@dentco.net">info@livinusmdps.online</a>
						</div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="<?= base_url() ?>" class="header-logo"><img src="<?= base_url('public/landing') ?>/images/logo.png" alt=""
								class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link link-inside" href="#servicesSection">Services</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-inside" href="#aboutSection">About Us</a>
										</li>
										<!-- <li class="nav-item">
											<a class="nav-link link-inside" href="#specialitySection">Speciality</a>
										</li> -->
										<!-- <li class="nav-item">
											<a class="nav-link link-inside" href="#equipmentSection">Equipment</a>
										</li> -->
										<li class="nav-item">
											<a class="nav-link link-inside" href="#faqSection">FAQ</a>
										</li>
										<!-- <li class="nav-item">
											<a class="nav-link link-inside" href="#specialistsSection">Specialists</a>
										</li> -->
										<li class="nav-item">
											<a class="nav-link link-inside" href="#contactSection">Contacts</a>
										</li>
										<!-- <li class="nav-item">
											<a class="nav-link link-inside" href="#testimonialsSection">Register</a>
										</li> -->
										<li class="nav-item">
											<a class="nav-link link-inside" href="<?= base_url('admin') ?>">Administrator Login</a>
										</li>
										
									</ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--//header-->
	<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
				<div class="quickLinks js-quickLinks closed">
					<div class="container">
						<div class="row no-gutters">
							<!-- <div class="col">
								<a href="#" class="link">
									<i class="icon-placeholder"></i><span>Location</span></a>
								<div class="link-drop p-0">
									<div id="googleMapDrop" class="google-map"></div>
								</div>
							</div> -->
							<!-- <div class="col">
								<a href="#" class="link">
									<i class="icon-clock"></i><span>Working Time</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-clock"></i>Working Time</h5>
									<table class="row-table">
										<tr>
											<td><i>Mon-Thu</i></td>
											<td>08:00 - 20:00</td>
										</tr>
										<tr>
											<td><i>Friday</i></td>
											<td> 07:00 - 22:00</td>
										</tr>
										<tr>
											<td><i>Saturday</i></td>
											<td>08:00 - 18:00</td>
										</tr>
										<tr>
											<td><i>Sunday</i></td>
											<td>Closed</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-pencil-writing"></i><span>Book Appointment</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Request Form</h5>
									<form id="requestForm" method="post" novalidate>
										<div class="successform">
											<p>Your message was sent successfully!</p>
										</div>
										<div class="errorform">
											<p>Something went wrong, try refreshing and submitting the form again.</p>
										</div>
										<div class="input-group">
											<span>
												<i class="icon-user"></i>
											</span>
											<input name="requestname" type="text" class="form-control"
												placeholder="Your Name" />
										</div>
										<div class="row row-sm-space mt-1">
											<div class="col">
												<div class="input-group">
													<span>
														<i class="icon-email2"></i>
													</span>
													<input name="requestemail" type="text" class="form-control"
														placeholder="Your Email" />
												</div>
											</div>
											<div class="col">
												<div class="input-group">
													<span>
														<i class="icon-smartphone"></i>
													</span>
													<input name="requestphone" type="text" class="form-control"
														placeholder="Your Phone" />
												</div>
											</div>
										</div>
										<div class="selectWrapper input-group mt-1">
											<span>
												<i class="icon-tooth"></i>
											</span>
											<select name="requestservice" class="form-control">
												<option selected="selected" disabled="disabled">Select Service</option>
												<option value="Malaria Diagnosis">Malaria Diagnosis</option>
												<option value="General Dentistry">Malaria Prescription </option>
												<option value="Orthodontics">Expert Session</option>
												
											</select>
										</div>
										<div class="row row-sm-space mt-1">
											<div class="col-sm-6">
												<div class="input-group flex-nowrap">
													<span>
														<i class="icon-calendar2"></i>
													</span>
													<div class="datepicker-wrap">
														<input name="requestdate" type="text"
															class="form-control datetimepicker" placeholder="Date"
															readonly>
													</div>
												</div>
											</div>
											<div class="col-sm-6 mt-1 mt-sm-0">
												<div class="input-group flex-nowrap">
													<span>
														<i class="icon-clock"></i>
													</span>
													<div class="datepicker-wrap">
														<input name="requesttime" type="text"
															class="form-control timepicker" placeholder="Time" readonly>
													</div>
												</div>
											</div>
										</div>
										<div class="text-right mt-2">
											<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
										</div>
									</form>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-calendar"></i><span>Doctors Timetable</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
									<p>This simply works as a guide and helps you to connect with dentists of your
										choice.
										Please confirm the doctor’s availability before leaving your premises.</p>
									<p class="text-right"><a href="#specialistsSection"
											class="btn btn-sm btn-hover-fill link-inside">Details</a></p>
								</div>
							</div>
							
							<div class="col">
								<a href="#" class="link">
									<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
									<p>Emergency dental care may be needed if you have had a blow to the face, lost a
										filling, or cracked a tooth. </p>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i><span
												class="phone">1-800-267-0000<br>1-800-267-0001</span>
										</li>
										<li><i class="icon-black-envelope"></i><a
												href="mailto:info@besthotel-email.com">info@besthotel-email.com</a>
										</li>
									</ul>
									<p class="text-right mt-2"><a href="#contactForm"
											class="btn btn-sm btn-hover-fill link-inside">Our
											Contacts</a></p>
								</div>
							</div> -->
							<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top"
										data-toggle="tooltip" data-placement="top" title="Close panel"></i></a>
							</div>
						</div>
					</div>
					<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left"
							title="Open panel">+</span></div>
				</div>
			</div>
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="loader-circle"></div>
				</div>
				<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider"
					data-slick='{"arrows": false, "dots": true}'>
					<div class="slide">
						<div class="img--holder" data-bg="<?= base_url('public/landing') ?>/images/content/slider/slide-01.jpeg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown">
											The Highest Standard
											<br>
											<b>Malaria Diagnosis</b>
										</div>
										<div class="slide-txt2" data-animation="fadeInUp">Experience freedom from
											malaria</div>
										<div class="slide-btn"><a href="#aboutSection" class="btn link-inside"
												data-animation="fadeInUp"><i class="icon-right-arrow"></i><span>Explore
													our services</span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-bg="<?= base_url('public/landing') ?>/images/content/slider/slide-02.jpeg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown">
											Care As Unique
											<br>
											<b>As you are free from Malaria</b>
										</div>
										<div class="slide-txt2" data-animation="fadeInUp">Live life free from Malaria</div>
										<div class="slide-btn"><a href="#aboutSection" class="btn link-inside"
												data-animation="fadeInUp"><i class="icon-right-arrow"></i><span>Explore
													our services</span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section slider-->
		
		<!-- diagnosis -->
		<div class="section" id="contactSection">
			<div class="banner-contact-us" style="background-image: url(<?= base_url('public/landing') ?>/images/content/contact-bg.html)">
				<div class="container">
					<div class="row no-gutters">
						<div
							class="col-sm-6 col-lg-6 order-2 order-sm-2 mt-3 mt-md-0 text-center text-md-right d-flex align-items-end">
							<img src="<?= base_url('public/landing') ?>/images/content/banner-callus.png" alt="" class="shift-right">
						</div>
						<div class="col-sm-6 col-lg-6 order-1 order-sm-1 d-flex">
							<div class="pt-2 pt-lg-6 pr-lg-3 text-center">
								<h2 class="title-left" data-title="Looking for a Doctor?"><span>Feels <br
											class="d-xl-none"> like <span class="theme-color">You have
											Malaria?</span></span></h2>
								<p>We believe in providing the best diagnosis and prescription. Tell us how you feel and get diagnosed</p>
								<form class="contact-form" id="diagnosisForm" method="post">
									<div class="successform">
										<p>Your message was sent successfully!</p>
									</div>
									<div class="errorform">
										<p>Something went wrong, try refreshing and submitting the form again.</p>
									</div>
									<div>
										<input type="text" class="form-control" name="name" placeholder="Your name*" required>
									</div>
									<div class="row row-sm-space mt-15">
										<div class="col-sm-6">
											<input type="text" class="form-control" name="phone"
												placeholder="Your Phone*">
											</div>
										<div class="col-sm-6 mt-15 mt-sm-0">
											<input type="text" class="form-control"
												name="email" placeholder="Email*" required>
											</div>
									</div>

									<div class="row row-sm-space mt-15">
										<div class="col-sm-6">
											<?php foreach($Plasmodium_Malaria as $row): ?>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="<?= $row->symptoms.'_'.$row->malaria_type ?>" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description"><?= $row->symptoms ?></span>
												</label>
											</div>
											<?php endforeach ?>
											<!-- <div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="sweating" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Profuse sweating</span>
												</label>
											</div>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="headache" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Headache</span>
												</label>
											</div>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="nausea" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Nausea</span>
												</label>
											</div> -->
										</div>
										<div class="col-sm-6 mt-15 mt-sm-0">
											<?php foreach($Plasmodium_Ovale as $row): ?>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="<?= $row->symptoms.'_'.$row->malaria_type ?>" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description"><?= $row->symptoms ?></span>
												</label>
											</div>
											<?php endforeach ?>
											<!-- <div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="musclePains" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Muscle pains</span>
												</label>
											</div>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="vomiting" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Vomiting</span>
												</label>
											</div>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="diarrhea" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Diarrhea</span>
												</label>
											</div>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="stools" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Bloody stools</span>
												</label>
											</div> -->
										</div>

										<div class="col-sm-6">
											<?php foreach($Plasmodium_Vivax as $row): ?>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="<?= $row->symptoms.'_'.$row->malaria_type ?>" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description"><?= $row->symptoms ?></span>
												</label>
											</div>
											<?php endforeach ?>
										
										</div>
										<div class="col-sm-6 mt-15 mt-sm-0">
											<?php foreach($Plasmodium_Falciparum as $row): ?>
											<div class="text-left mt-1">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="symptoms[]" value="<?= $row->symptoms.'_'.$row->malaria_type ?>" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description"><?= $row->symptoms ?></span>
												</label>
											</div>
											<?php endforeach ?>
										</div>
									</div>
									
									
									
									<div class="mt-15">
										<textarea class="form-control" name="message" placeholder="Tell us how you feel"></textarea>
									</div>
									<div class="text-left mt-1">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" name="updated" class="custom-control-input">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description">Keep me updated</span>
										</label>
									</div>
									<div class="mt-2 mt-lg-4">
										<button type="submit" id="submitDiagnosis" class="btn"><i class="icon-right-arrow"></i><span>Get
										Diagnosed</span><i class="icon-right-arrow"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- diagnosis -->
		<!--section promotext -->
		<div class="section mt-0">
			<div class="container">
				<div class="promo-text">
					<h4><i class="icon-eye-7"></i>More than <span class="text-lg">50 000</span> Malaria diagnosis</h4>
					<p>The number of Malaria diagnosis performed.</p>
				</div>
			</div>
		</div>
		<!--//section promotext -->
		<!--section services-->
		<div class="section bg-grey mt-0" id="servicesSection">
			<div class="container">
				<div class="title-wrap text-center text-md-left">
					<h2 class="h1 title-with-clone" data-title="Our Services"><span>Our <span
								class="theme-color">Services</span></span></h2>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="row js-services-tabs-carousel">
							<div class="col-md-6 col-lg-4">
								<div class="service-card-style3 active">
									<div class="service-card-icon">
										<i class="icon-eye-1"></i>
									</div>
									<h5 class="service-card-name">Malaria diagnosis</h5>
									<p>Malaria diagnosis and prescription</p>
									<div class="mt-15 mt-md-4"></div>
									<a href="#" class="btn-link" data-toggle="modal"
										data-target="#modalBookingForm">Sign
										In<i class="icon-right-arrow"></i></a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="service-card-style3">
									<div class="service-card-icon">
										<i class="icon-eye-3"></i>
									</div>
									<h5 class="service-card-name">Malaria Prescription </h5>
									<p>Get expert prescription</p>
									<div class="mt-15 mt-md-4"></div>
									<a href="#" class="btn-link" data-toggle="modal"
										data-target="#modalBookingForm">Sign
										In<i class="icon-right-arrow"></i></a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="service-card-style3">
									<div class="service-card-icon">
										<i class="icon-eye-4"></i>
									</div>
									<h5 class="service-card-name">Expert Session</h5>
									<p>Get a scheduled session with our expert</p>
									<div class="mt-15 mt-md-4"></div>
									<a href="#" class="btn-link" data-toggle="modal"
										data-target="#modalBookingForm">Sign
										In<i class="icon-right-arrow"></i></a>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 service-info-carousel-wrap">
						<div class="service-info-carousel js-services-info">
							<div class="service-info">
								<div class="service-info-num"><span>1</span>/3</div>
								<p>Malaria diagnosis and prescription</p>
							</div>
							<div class="service-info">
								<div class="service-info-num"><span>2</span>/3</div>
								<p>Get expert prescription.</p>
							</div>
							<div class="service-info">
								<div class="service-info-num"><span>3</span>/3</div>
								<p>Get a scheduled session with our expert</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section  services-->
		<!--section-->
		<div class="section" id="aboutSection">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Malaria diagnosis<br>
						and <span class="theme-color">Prescription Systems</span></h2>
				</div>
				<div class="nav nav-pills-simple" role="tablist">
					<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab">Malaria Diagnosis</a>
					<a class="nav-link" data-toggle="pill" href="#tab-B" role="tab">Symptoms</a>
					<!-- <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab">Prices</a> -->
				</div>
				<div id="tab-content" class="tab-content mt-2 mt-sm-4">
					<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
						<div class="tab-bg"><img src="images/content/bg-map.png" alt=""></div>
						<div class="row">
							<div class="col-md-6 h-100 mb-2 mb-md-0">
								<img src="<?= base_url('public/landing') ?>/images/content/index-img-02.png" alt="" class="img-fluid">
								<a href="#" class="video-btn-circle js-video-btn" data-toggle="modal"
									data-src="https://www.youtube.com/embed/uyWt48mWmz0" data-target="#videoModal">
									<span><i class="icon-play"></i></span>
								</a>
								<!-- Video Modal -->
								<div class="modal fade" id="videoModal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item video" src="#"
														allowscriptaccess="always" allow="autoplay"></iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- //Video Modal -->
							</div>
							<div class="col-md-6">
								<div class="pt-xl-1">
									<p>Malaria is a disease caused by a plasmodium parasite, transmitted by a bite of infected mosquitoes. Malaria is a life-threatening disease. People with malaria who receive treatment typically have a good long-term outlook</p>
									<ul class="marker-list-md collapsed-md collapsed-md--3">
										<li>High fever.</li>
										<li>Profuse sweating.
										</li>
										<li>Headache.</li>
										<li>Nausea
										</li>
										<li>Muscle pains.</li>
									</ul>
									<a href="#" class="js-view-all-list collapsed-view-all-list">view all</a>
								</div>
							</div>
						</div>
					</div>
					<div id="tab-B" class="tab-pane fade" role="tabpanel">
						<div class="tab-bg"><img src="<?= base_url('public/landing') ?>/images/content/bg-map.png" alt=""></div>
						<div class="row">
							<div class="col-md-6 h-100 mb-2 mb-md-0">
								<img src="<?= base_url('public/landing') ?>/images/content/index-img-01.png" alt="" class="img-fluid">
								<a href="#" class="video-btn-circle js-video-btn" data-toggle="modal"
									data-src="#" data-target="#videoModal1">
									<span><i class="icon-play"></i></span>
								</a>
								<!-- Video Modal -->
								<div class="modal fade" id="videoModal1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item video" src="#"
														allowscriptaccess="always" allow="autoplay"></iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- //Video Modal -->
							</div>
							<div class="col-md-6">
								<div class="pt-xl-1">
									<p>Some common symptoms of Malaria, includes:</p>
									<ul
										class="marker-list-md two-col-list-lg two-col-list-xl collapsed-md collapsed-md--7">
										<li>High fever.</li>
										<li>Profuse sweating.
										</li>
										<li>Headache.</li>
										<li>Nausea.
										</li>
										<li>Muscle pains.</li>
										<li>Vomiting.</li>
										<li>Abdominal pains.
										</li>
										<li>Diarrhea.</li>
										<li>Bloody stools
										</li>
									</ul>
									<a href="#" class="js-view-all-list collapsed-view-all-list">view all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section speciality-->
		<!-- <div class="section bg-grey" id="specialitySection">
			<div class="container">
				<div class="title-wrap text-center text-md-left">
					<h2 class="h1 title-with-clone" data-title="Our Speciality"><span>What’s Our <span
								class="theme-color">Speciality</span></span></h2>
				</div>
				<div class="row no-gutters tab-vert-wrap">
					<div class="col-md-4">
						<div class="nav nav-pills-v" role="tablist">
							<a class="nav-link active" data-toggle="pill" href="#tab-A-v" role="tab"><span>+</span>Why
								Choose Us?</a>
							<a class="nav-link" data-toggle="pill" href="#tab-B-v" role="tab"><span>+</span>Our
								Statement</a>
							<a class="nav-link" data-toggle="pill" href="#tab-C-v" role="tab"><span>+</span>Our
								Principles</a>
							<a class="nav-link" data-toggle="pill" href="#tab-D-v" role="tab"><span>+</span>Our
								Philosophy</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="tab-content tab-content-v">
							<div id="tab-A-v" class="tab-pane fade show active" role="tabpanel">
								<div class="nav nav-pills-v" role="tablist">
									<a href="#tab-A-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Why
										Choose Us?</a>
								</div>
								<div id="tab-A-v-mob" class="collapse show tab-content-m">
									<h3>Why Choose Us?</h3>
									<p>We guarantee the highest professional standards and use the proven, pioneering
										and
										game-changing Malaria diagonosis technique performed with medical experts as well as the
										most
										advanced laboratory scans. </p>
									<div class="mt-3"></div>
									<div class="row">
										<div class="col-sm-4">
											<div class="icn-text-vert">
												<div class="icn-text-vert-icn">
													<i class="icon-eye-2"></i>
												</div>
												<h4 class="icn-text-vert-title">High Standard of Malaria diagnosis</h4>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="icn-text-vert">
												<div class="icn-text-vert-icn">
													<i class="icon-team"></i>
												</div>
												<h4 class="icn-text-vert-title">Committed laboratory Team</h4>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="icn-text-vert">
												<div class="icn-text-vert-icn">
													<i class="icon-glasses-2"></i>
												</div>
												<h4 class="icn-text-vert-title">Modern Equipment</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab-B-v" class="tab-pane fade" role="tabpanel">
								<div class="nav nav-pills-v" role="tablist">
									<a href="#tab-B-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Our
										Statement</a>
								</div>
								<div id="tab-B-v-mob" class="collapse tab-content-m">
									<h3>Our Statement</h3>
									<p>At our family owned eye clinic we strive to provide our patients with the
										ultimate eye care experience every time they visit. Check out our Mission and
										Vision Statement below!</p>
									<div class="mt-2 mt-lg-4"></div>
									<div class="row">
										<div class="col-sm">
											<h4>Mission</h4>
											<p>Our mission is to provide clinical excellence and unmatched professional
												service to give our patients the best opportunity for a lifetime of
												healthy eyes and excellent vision.</p>
										</div>
										<div class="col-sm">
											<h4>Vision</h4>
											<p>Give our patients the best possible vision performance and subsequent
												quality of life by providing the best vision and eye healthcare
												possible.</p>
										</div>
									</div>
								</div>
							</div>
							<div id="tab-C-v" class="tab-pane fade" role="tabpanel">
								<div class="nav nav-pills-v" role="tablist">
									<a href="#tab-C-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Our
										Principles</a>
								</div>
								<div id="tab-C-v-mob" class="collapse tab-content-m">
									<h3>Our Principles</h3>
									<p>We have long lived by guiding principles that define and differentiate us. We
										foster an environment of trust and mutual respect, free expression and inquiry,
										and personal resilience and achievement.</p>
									<ul class="marker-list-md">
										<li>We Aspire to Excellence</li>
										<li>We Embrace Diversity and Community</li>
										<li>We Promote Curiosity</li>
										<li>Our Community Achieves Through Collaboration</li>
										<li>We are Passionately Engaged</li>
									</ul>
								</div>
							</div>
							<div id="tab-D-v" class="tab-pane fade" role="tabpanel">
								<div class="nav nav-pills-v" role="tablist">
									<a href="#tab-D-v-mob" class="nav-link" data-toggle="collapse"><span>+</span>Our
										Philosophy</a>
								</div>
								<div id="tab-D-v-mob" class="collapse tab-content-m">
									<h3>Our Philosophy</h3>
									<div class="row row-md-space">
										<div class="col-sm-4 mb-2 mb-md-0">
											<img src="<?= base_url('public/landing') ?>/images/content/index-img-03.jpg" alt="" class="w-100">
										</div>
										<div class="col-sm-8">
											<p>Our philosophy is to provide exceptional eye care, which requires
												individual attention and genuine concern. Our office provides a unique
												experience allowing us to treat you, the patient, and your vision
												concerns. We facilitate building a strong patient-doctor relationship
												through direct one-on-one communication.</p>
											<ul class="marker-list-md">
												<li>We believe in the power of sight</li>
												<li>We believe in each individual’s unique vision</li>
												<li>We believe in state-of-the-art medical eye care</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--//section speciality-->
		<!--section equipment-->
		<!-- <div class="section" id="equipmentSection">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Ophthalmology Devices</div>
					<h2 class="h1 title-with-clone" data-title="Equipment">Our Equipment</h2>
					<div class="h-decor"></div>
				</div>
				<div class="simple-content-carousel js-equipment-carousel">
					<div class="simple-content-carousel-item">
						<div class="row">
							<div class="col-md-6 mt-4 mt-md-0 text-center">
								<img src="<?= base_url('public/landing') ?>/images/content/img-equipment-02.jpg" class="img-fluid" alt="">
							</div>
							<div class="col-md-6">
								<h4>ZEISS Cirrus HD OCT 500 & 5000</h4>
								<p>The new CIRRUS HD-OCT models 5000 and 500 are specifically designed to deliver a
									carefully constructed set of sophisticated applications that build upon one another
									to deliver rapidly-evolving diagnostics for multiple patient populations.</p>
								<table class="table table-striped-custom">
									<tbody>
										<tr>
											<th>Scan pattern</th>
											<th>Capture time</th>
										</tr>
										<tr>
											<td>Degrees</td>
											<td>College of Surgeons</td>
										</tr>
										<tr>
											<td>512 x 128</td>
											<td>2.4 seconds</td>
										</tr>
										<tr>
											<td>200 x 200</td>
											<td>1.5 seconds</td>
										</tr>
										<tr>
											<td>5-Line Raster / Enhanced HD Raster</td>
											<td>0.8 seconds</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="simple-content-carousel-item">
						<div class="row">
							<div class="col-md-6 mt-4 mt-md-0 text-center">
								<img src="<?= base_url('public/landing') ?>/images/content/img-equipment-01.jpg" class="img-fluid" alt="">
							</div>
							<div class="col-md-6">
								<h4>HRK-1 Auto Refractor</h4>
								<p>Professionals also admire HRK-1’s commitment to its fundamental foundation as a
									quality Auto Ref/ Keratometer, now featuring Smart Assembly Moving Control
									Technology, and high-performance light source. As eye-diseases and ophthalmologic
									disorders are increasing, Huvitz is devoting its efforts to think more deeply about
									the essence of its technology offerings.</p>
								<ul class="marker-list-md">
									<li>Smart Assembly Moving Control Technology</li>
									<li>Quick Virtual Aiming Dot Function</li>
									<li>Simple up & Down Auto Tracking</li>
									<li>Familiar User Friendly Interface</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="simple-content-carousel-item">
						<div class="row">
							<div class="col-md-6 mt-4 mt-md-0 text-center">
								<img src="<?= base_url('public/landing') ?>/images/content/img-equipment-03.jpg" class="img-fluid" alt="">
							</div>
							<div class="col-md-6">
								<h4>Huvitz HRK-8000A Autorefractor Keratometer</h4>
								<p>You can customize lenses, play a more active role in managing cataract and refractive
									surgery patients and more with the HRK-8000A. The HRK-8000A combines the features of
									an auto refractor, auto keratometer, and wavefront aberrometer into one, high-tech
									instrument.</p>
								<ul class="marker-list-md">
									<li>Optimized Optical System</li>
									<li>Micro Lens Array</li>
									<li>Customized Lens Manufacturing</li>
									<li>More Data on Aberration Measurement</li>
									<li>High Order Aberration Map</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--//section equipment-->
		<!--section faq-->
		<div class="section bg-grey py-0" id="faqSection">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-cover"
						style="background-image: url(<?= base_url('public/landing') ?>/images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap faq-wrap--pad-lg px-15 px-lg-8">
							<div class="title-wrap">
								<h2 class="h1">FAQ</h2>
							</div>
							<div class="mt-2 mt-lg-4"></div>
							<div class="faq-item">
								<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1"
									aria-expanded="true"><span>1.</span><span>What is malaria?</span></a>
								<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
									<div>
										<p>    Malaria is a disease caused by a plasmodium parasite, transmitted by a bite of infected mosquitoes. Malaria is a life-threatening disease. People with malaria who receive treatment typically have a good long-term outlook. If complication arises as a result of malaria, the outlook may not be as good as cerebral malaria; which causes swelling of the blood vessels of the brain </p>
									</div>
								</div>
							</div>
							<div class="faq-item">
								<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2"
									aria-expanded="false" class="collapsed"><span>2.</span><span>How is malaria transmitted?</span></a>
								<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
									<div>
										<p>
										Usually, people get malaria by being bitten by an infective female Anopheles mosquito. Only Anopheles mosquitoes can transmit malaria and they must have been infected through a previous blood meal taken from an infected person. When a mosquito bites an infected person, a small amount of blood is taken in which contains microscopic malaria parasites. About 1 week later, when the mosquito takes its next blood meal, these parasites mix with the mosquito’s saliva and are injected into the person being bitten.
										</p>
									</div>
								</div>
							</div>
							<div class="faq-item">
								<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3"
									aria-expanded="false" class="collapsed"><span>3.</span><span>Who is at risk for malaria? </span></a>
								<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
									<div>
										<p>
										Anyone can get malaria. Most cases occur in people who live in countries with malaria transmission. People from countries with no malaria can become infected when they travel to countries with malaria or through a blood transfusion (although this is very rare). Also, an infected mother can transmit malaria to her infant before or during delivery.
										</p>
									</div>
								</div>
							</div>
							<div class="faq-item">
								<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4"
									aria-expanded="false" class="collapsed"><span>4.</span><span>How do I know if I have malaria for sure? </span></a>
								<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
									<div>
										<p>
										Most people, at the beginning of the disease, have fever, sweats, chills, headaches, malaise, muscles aches, nausea, and vomiting. Malaria can very rapidly become a severe and life-threatening disease. The surest way for you and your health-care provider to know whether you have malaria is to have a diagnostic test where a drop of your blood is examined under the microscope for the presence of malaria parasites.
										</p>
									</div>
								</div>
							</div>
							<a href="#" class="btn mt-15 mt-sm-3" data-toggle="modal"
								data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>ask
									question</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
		<!--section specialists-->
		<!-- <div class="section" id="specialistsSection">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Perfect Team</div>
					<h2 class="h1 title-with-clone" data-title="Specialists">Our Specialists</h2>
					<div class="h-decor"></div>
				</div>
				<form action="#" class="content-search d-flex">
					<div class="input-wrap">
						<input type="text" class="form-control" placeholder="Search for specialist">
					</div>
					<button type="submit"><i class="icon-search"></i></button>
				</form>
				<div class="mt-3 mt-lg-5"></div>
				<div class="row specialist-carousel2 js-specialist-carousel2">
					<div class="doctor-box-h-wrap">
						<div class="doctor-box-h">
							<div class="doctor-box-h-photo">
								<img src="<?= base_url('public/landing') ?>/images/content/doctor-01.jpg" class="img-fluid" alt="">
							</div>
							<div class="doctor-box-h-info">
								<h5 class="doctor-box-h-name">Dr. Stuart Orozco</h5>
								<table class="table doctor-box-h-table">
									<tbody>
										<tr>
											<td>Speciality:</td>
											<td>Ophthalmology</td>
										</tr>
										<tr>
											<td>Areas of Expertise:</td>
											<td>Malaria Diagnosis</td>
										</tr>
										<tr>
											<td></td>
											<td>Malaria Diagnosis</td>
										</tr>
										<tr>
											<td>Years of Practice:</td>
											<td>7 Years</td>
										</tr>
										<tr>
											<td>Working Time:</td>
											<td>
												<div class="schedule-row">
													<span><span>Mon-Thu</span><span>08:00 - 20:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span>Friday</span><span>07:00 - 22:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span>Saturday</span><span>08:00 - 18:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td>Contacts:</td>
											<td>
												<ul class="contact-inline">
													<li><i class="icon-telephone"></i><span>1-248-715-8767</span></li>
													<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
													<li><a href="mailto:#"><i class="icon-black-envelope"></i></a></li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="doctor-box-h-booking">
									<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
											class="icon-right-arrow"></i><span>book a visit</span><i
											class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="doctor-box-h-wrap">
						<div class="doctor-box-h">
							<div class="doctor-box-h-photo">
								<img src="<?= base_url('public/landing') ?>/images/content/doctor-02.jpg" class="img-fluid" alt="">
							</div>
							<div class="doctor-box-h-info">
								<h5 class="doctor-box-h-name">Dr. Frank Bigham</h5>
								<table class="table doctor-box-h-table">
									<tbody>
										<tr>
											<td>Speciality:</td>
											<td>Ophthalmology</td>
										</tr>
										<tr>
											<td>Areas of Expertise:</td>
											<td>Cataract Treatment</td>
										</tr>
										<tr>
											<td></td>
											<td>Laser Eye Surgery</td>
										</tr>
										<tr>
											<td>Years of Practice:</td>
											<td>20 Years</td>
										</tr>
										<tr>
											<td>Working Time:</td>
											<td>
												<div class="schedule-row">
													<span><span>Mon-Thu</span><span>08:00 - 20:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span>Friday</span><span>07:00 - 22:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span>Saturday</span><span>08:00 - 18:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td>Contacts:</td>
											<td>
												<ul class="contact-inline">
													<li><i class="icon-telephone"></i><span>1-248-715-8767</span></li>
													<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
													<li><a href="mailto:#"><i class="icon-black-envelope"></i></a></li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="doctor-box-h-booking">
									<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
											class="icon-right-arrow"></i><span>book a visit</span><i
											class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="doctor-box-h-wrap">
						<div class="doctor-box-h">
							<div class="doctor-box-h-photo">
								<img src="<?= base_url('public/landing') ?>/images/content/doctor-03.jpg" class="img-fluid" alt="">
							</div>
							<div class="doctor-box-h-info">
								<h5 class="doctor-box-h-name">Dr. Betty Bone</h5>
								<table class="table doctor-box-h-table">
									<tbody>
										<tr>
											<td>Speciality:</td>
											<td>Ophthalmology</td>
										</tr>
										<tr>
											<td>Areas of Expertise:</td>
											<td>Cataract Treatment</td>
										</tr>
										<tr>
											<td></td>
											<td>Laser Eye Surgery</td>
										</tr>
										<tr>
											<td>Years of Practice:</td>
											<td>20 Years</td>
										</tr>
										<tr>
											<td>Working Time:</td>
											<td>
												<div class="schedule-row">
													<span><span>Mon-Thu</span><span>08:00 - 20:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span>Friday</span><span>07:00 - 22:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span>Saturday</span><span>08:00 - 18:00</span></span>
												</div>
											</td>
										</tr>
										<tr>
											<td>Contacts:</td>
											<td>
												<ul class="contact-inline">
													<li><i class="icon-telephone"></i><span>1-248-715-8767</span></li>
													<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
													<li><a href="mailto:#"><i class="icon-black-envelope"></i></a></li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="doctor-box-h-booking">
									<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
											class="icon-right-arrow"></i><span>book a visit</span><i
											class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--//section specialists-->
		<!--section testimonials-->
		<!-- <div class="section bg-cover" id="testimonialsSection">
			<div class="container-fluid px-0">
				<div class="reviews-style3-wrap">
					<div class="reviews-left" style="background-image: url(<?= base_url('public/landing') ?>/images/content/testimonials-left.png)"></div>
					<div class="reviews-style3" style="background-image: url(<?= base_url('public/landing') ?>/images/content/bg-map.png)">
						<div class="title-wrap text-center">
							<div class="reviews-title-icon">“</div>
							<h2 class="h1 reviews-title" data-title="Testimonials">Clinic Testimonials</h2>
						</div>
						<div class="js-reviews-carousel2 reviews-carousel">
							<div class="review">
								<p class="review-text">I would like to give you a special 'Thank You' to all of you for
									the care
									you've given. You were special to a part of our lives for the year we knew you all.
									You were
									very caring. Nurses like you are never forgotten. I just can't thank you enough.</p>
								<p><span class="review-author">- Joseph Dunbar,</span> <span
										class="review-author-position">Carpenter</span>
								</p>
							</div>
							<div class="review">
								<p class="review-text">Today is my last day of infusion. But I know I will be back …not
									as a
									patient but a visitor. I have only positive things to say about the nurses at MedEra
									here in
									infusion and also on the 4th Floor.</p>
								<p><span class="review-author">- Steven Roa,</span> <span
										class="review-author-position">Businesswoman</span>
								</p>
							</div>
							<div class="review">
								<p class="review-text">Am very impressed with you all as well as being highly proficient
									is
									absolutely adorable. I feel so relaxed in her capable hands and hope to be her
									patient for a
									very long time! You are a fantastic team!!!</p>
								<p><span class="review-author">- Wilmer Stevenson,</span> <span
										class="review-author-position">Creative manager</span>
								</p>
							</div>
						</div>
					</div>
					<div class="reviews-right" style="background-image: url(<?= base_url('public/landing') ?>/images/content/testimonials-right.png)">
					</div>
				</div>
			</div>
		</div> -->
		<!--//section testimonials-->
		<!--section events-->
		<!-- <div class="section" id="eventsSection">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Clinic Events</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-lg-3">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="<?= base_url('public/landing') ?>/images/content/news-01.jpg" alt="">
							</div>
							<div class="post-date-bg">Apr 16, 2019</div>
							<h2 class="post-title">The causes of acquired 3rd nerve palsy</h2>
							<div class="post-teaser">Among all cases of ocular misalignment from cranial nerve palsies,
								third nerve palsies are the most worrisome.</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="<?= base_url('public/landing') ?>/images/content/news-02.jpg" alt="">
							</div>
							<div class="post-date-bg">Mar 25, 2019</div>
							<h2 class="post-title">Dry eye can affect more than the eye</h2>
							<div class="post-teaser">Dry eye can significantly lower people's quality of life, a new
								study says. Some have a hard time performing.</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="<?= base_url('public/landing') ?>/images/content/news-03.jpg" alt="">
							</div>
							<div class="post-date-bg">May 5, 2019</div>
							<h2 class="post-title">Laser pointers are still not toys</h2>
							<div class="post-teaser">A boy from Greece lost much of the vision in one eye after looking
								directly at the light from a laser pointer.</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="<?= base_url('public/landing') ?>/images/content/news-01.jpg" alt="">
							</div>
							<div class="post-date-bg">Apr 16, 2019</div>
							<h2 class="post-title">The causes of acquired 3rd nerve palsy</h2>
							<div class="post-teaser">Among all cases of ocular misalignment from cranial nerve palsies,
								third nerve palsies are the most worrisome.</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="<?= base_url('public/landing') ?>/images/content/news-02.jpg" alt="">
							</div>
							<div class="post-date-bg">Mar 25, 2019</div>
							<h2 class="post-title">Dry eye can affect more than the eye</h2>
							<div class="post-teaser">Dry eye can significantly lower people's quality of life, a new
								study says. Some have a hard time performing.</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="<?= base_url('public/landing') ?>/images/content/news-03.jpg" alt="">
							</div>
							<div class="post-date-bg">May 5, 2019</div>
							<h2 class="post-title">Laser pointers are still not toys</h2>
							<div class="post-teaser">A boy from Greece lost much of the vision in one eye after looking
								directly at the light from a laser pointer.</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--//section events-->
		<!--section banner-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center bg-cover" style="background-image: url(<?= base_url('public/landing') ?>/images/content/banner-center.jpg)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1-1">Online Diagnosis & Prescriptions</div>
						<div class="banner-center-text5 max-450-md">if you are a doctor you can login
						</div>
						<a href="<?= base_url('admin/login') ?>" class="btn mt-2 mt-sm-3 mt-lg-5"><i
								class="icon-right-arrow"></i><span>Doctor Login</span><i
								class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--//section banner-->
		<!--section contact-->
		
		<!--//section contact-->
	</div>
	
	<?= view('landing/footer') ?>