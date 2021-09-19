<!--footer-->
<div class="footer mt-0">
		<div class="container">
			<div class="row py-1 py-md-2 px-lg-0">
				<div class="col-lg-4 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img src="<?= base_url('public/landing') ?>/images/logo.png" alt="" class="img-fluid" style="width: 50%">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-none d-md-block d-lg-none">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i
										class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i
										class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i
										class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i
										class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">
							<div class="footer-text mt-1 mt-lg-2">
								<p>To receive email releases, simply provide
									<br>us with your email below
								</p>
								<form action="#" class="footer-subscribe">
									<div class="input-group">
										<input name="subscribe_mail" type="text" class="form-control"
											placeholder="Your Email" />
										<span><i class="icon-black-envelope"></i></span>
									</div>
								</form>
							</div>
							<div class="footer-social d-md-none d-lg-block">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i
										class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i
										class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i
										class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i
										class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Recent Posts</h3>
					<div class="h-decor"></div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="<?= base_url('public/landing') ?>/images/content/footer-post-author-01.jpg" alt=""
								class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="#">How to prevent yourself from Malaria...</a></div>
							<p>September 16, 2021</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="images/content/footer-post-author-03.jpg" alt=""
								class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="#">How will I know if I am malaria free?</a></div>
							<p>September 12, 2021</p>
						</div>
					</div>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="<?= base_url('public/landing') ?>/images/content/footer-post-author-02.jpg" alt=""
								class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="#">Can I get a Malaria self-medication?.</a></div>
							<p>AUgust 25, 2021</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Our Contacts</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>1560 Ekpo Abasi Lane
							<br>
							<a href="#" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get
									directions on the map</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span
										class="text-nowrap">+234-8104441263</span>,
										 <!-- <span
										class="text-nowrap">1-800-267-0001</span></span></b> -->
							<br>(24/7 General inquiry)
						</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@livinusmdps.online</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">Copyright © <script> document.write( new Date().getFullYear()) </script> <a
							href="#">Livinusmdps</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="#">Privacy Policy</a>
					</div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency
							cases&nbsp;&nbsp;&nbsp;</span><i
							class="icon-telephone"></i>&nbsp;&nbsp;<b>+234-8104441263</b></div>
				</div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Ask a Question</h3>
						<form class="mt-15" id="questionForm" method="post" novalidate>
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
								<input type="text" name="name" class="form-control" autocomplete="off"
									placeholder="Your Name*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
								<input type="text" name="email" class="form-control" autocomplete="off"
									placeholder="Your Email*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
								<input type="text" name="phone" class="form-control" autocomplete="off"
									placeholder="Your Phone" />
							</div>
							<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal modal-form fade" id="modalBookingForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Book an Appointment</h3>
						<form class="mt-15" id="bookingForm" method="post" novalidate>
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
								<input type="text" name="bookingname" class="form-control" autocomplete="off"
									placeholder="Your Name*" />
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input type="text" name="bookingemail" class="form-control" autocomplete="off"
											placeholder="Your Email*" />
									</div>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input type="text" name="bookingphone" class="form-control" autocomplete="off"
											placeholder="Your Phone" />
									</div>
								</div>
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
										<input type="text" name="bookingage" class="form-control" autocomplete="off"
											placeholder="Your age" />
									</div>
								</div>
							</div>
							<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-tooth"></i>
								</span>
								<select name="bookingservice" class="form-control">
									<option selected="selected" disabled="disabled">Select Service</option>
									<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
									<option value="General Dentistry">General Dentistry</option>
									<option value="Orthodontics">Orthodontics</option>
									<option value="Children`s Dentistry">Children`s Dentistry</option>
									<option value="Dental Implants">Dental Implants</option>
									<option value="Dental Emergency">Dental Emergency</option>
								</select>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingdate" type="text" class="form-control datetimepicker"
										placeholder="Date" readonly>
								</div>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingtime" type="text" class="form-control timepicker"
										placeholder="Time">
								</div>
							</div>
							<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendors -->
	<script src="<?= base_url('public/landing') ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/cookie/jquery.cookie.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/bootstrap-datetimepicker/moment.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/popper/popper.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/waypoints/sticky.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/slick/slick.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/countTo/jquery.countTo.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/form-validation/jquery.form.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/form-validation/jquery.validate.min.js"></script>
	<script src="<?= base_url('public/landing') ?>/vendor/isotope/isotope.pkgd.min.js"></script>
	<!-- Custom Scripts -->
	<script src="<?= base_url('public/landing') ?>/js/app.js"></script>
	<script src="<?= base_url('public/landing') ?>/js/app-shop.js"></script>
	<script src="<?= base_url('public/landing') ?>/color/color.js"></script>
	<script src="form/forms.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- scripts -->
	<script>
		$('#diagnosisForm').on('submit', function(e){
			e.preventDefault();
			
			let data = $(this).serialize();

			Swal.fire({
				title: 'Are you sure?',
				text: "Your record will be submited to medical experts for revision!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, Diagnose!'
			}).then((result) => {
				if (result.isConfirmed) {
					$('#submitDiagnosis').attr('disabled', true);
					$('#submitDiagnosis').html('Please wait <i class="fas fa-spinner fa-spin" style="font-size:14px"></i>');
					var url = '<?= base_url('home/diagnose') ?>';
					$.ajax({
						type: 'POST',
						url: url,
						data: data,
						dataType: 'json',
						success: function (res) {
							console.log(res.patient_id)

							Swal.fire({
								icon: 'success',
								title: 'Submitted...',
								text: 'Symptoms successfully submitted. Your result is ready.!',
								// footer: '<a href="<?= base_url() ?>/result" >Click here to view result?</a>'
								// confirmButton: false,
							}).then((result) => {
								window.location.href = "<?= base_url() ?>/result/"+res.patient_id;
							}
							);
							$('#submitDiagnosis').attr('disabled', false);
							$('#submitDiagnosis').html('Get Diagnosed');

						}

					})
				}
			})
							
		})

	</script>



</body>

</html>