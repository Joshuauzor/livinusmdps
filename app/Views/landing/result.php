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
								href="tel:1-847-555-5555">+234 810 444 1263</a></div>
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
		
		<!--//section faq-->
		<!--section specialists-->
		<div class="section" id="specialistsSection">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color"><?= $patient->name ?></div>
					<h2 class="h1 title-with-clone" data-title="Specialists">Diagnosis Result</h2>
					<div class="h-decor"></div>
				</div>
				
				<div class="mt-3 mt-lg-5"></div>
				<div class="row specialist-carousel2 js-specialist-carousel2">
					<div class="doctor-box-h-wrap">
						<div class="doctor-box-h">
							<div class="doctor-box-h-photo">
								<img src="<?= base_url('public/landing') ?>/images/content/doctor-01.jpg" class="img-fluid" alt="">
							</div>
							<div class="doctor-box-h-info">
								<h5 class="doctor-box-h-name"><?= $patient->name ?></h5>
								<table class="table doctor-box-h-table">
									<tbody>
										<tr>
											<td>Email:</td>
											<td><?= $patient->email ?></td>
										</tr>
                                        <?php if($patient->symptoms != 'none') : ?>
										<tr>
											<td>Symptoms:</td>
											<td>
												<div class="schedule-row">
													<span><span>Here are your symptoms</span></span>
												</div>
											</td>
										</tr>
                                        <?php foreach($submitted_symptoms as $row): ?>
										<tr>
											<td></td>
											<td>
												<div class="schedule-row">
													<span><span><?= $row ?></span></sp>
												</div>
											</td>
										</tr>
                                        <?php endforeach ?>

										<tr>
											<td>Malaria Type:</td>
											<td><?= $patient->malaria_type ?></td>
										</tr>
										<tr>
											<td>Prescription:</td>
											<td><?= $prescription->prescription ?></td>
										</tr>
										<?php endif ?>

										<tr>
											<td>Result:</td>
											<td>
												<ul class="contact-inline">
													<span><?= $patient->result ?></span>							
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
								<!-- <div class="doctor-box-h-booking">
									<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
											class="icon-right-arrow"></i><span>book a doctor</span><i
											class="icon-right-arrow"></i></a>
								</div> -->
                                <div class="doctor-box-h-booking">
									<a href="<?= base_url() ?>" class="btn"><i
											class="icon-right-arrow"></i><span>Back Home</span><i
											class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section specialists-->

		
		<!--//section contact-->
	</div>
	<!--footer-->
    <?= view('landing/footer') ?>