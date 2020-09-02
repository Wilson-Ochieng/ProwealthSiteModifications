<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#1b9dff', 'colorSecondary': '#3bb452', 'colorTertiary': '#0a83df', 'colorQuaternary': '#e8eef3'}">
	
<!-- Mirrored from preview.oklerthemes.com/porto/8.0.0/demo-insurance-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 17:25:22 GMT -->
<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>PROWEALTH Insurance | Contact</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<?php  include'header.php'; ?>

			<div role="main" class="main">
				
			<section style="background: #020066;" class="page-header page-header-modern section-no-border custom-bg-color-1 page-header-lg mb-0">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="custom-primary-font text-11 font-weight-light">Contact</h1>
						</div>
					</div>
				</div>
			</section>

			<!-- <section class="section bg-color-light border-0 my-0">
				<div class="container">
					<div class="row appear-animation" data-appear-animation="fadeInUpShorter">
						<div class="col">
							<div class="owl-carousel owl-theme stage-margin custom-carousel-style-1 mb-0" data-plugin-options="{'items': 5, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<hr class="solid custom-opacity-2 mt-0">
			<div class="container pb-3">
				<div class="row pt-5 mb-5">
					<div class="col-lg-7 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
						<p class="lead mb-4 mt-4">How may we serve you today?</p>

						<form id="contactForm" class="contact-form" action="https://preview.oklerthemes.com/porto/8.0.0/php/contact-form.php" method="POST">
							<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<input type="submit" value="Send Message" class="btn btn-primary custom-btn-style-1 text-uppercase" data-loading-text="Loading...">
								</div>
							</div>
						</form>

					</div>
					<div class="col-lg-4 col-lg-offset-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

						<ul class="list list-unstyled mt-4 mb-4">
							<li><strong>Address:</strong> Vedic House - Mama Ngina Street, 5th Floor Next to Queensway House
</li>
							<li><strong>Phone:</strong> 0729 111 442</li>
							<li><strong>Email:</strong> <a href="prowealthinsure@gmail.com">prowealthinsure@gmail.com</a></li>
						</ul>

						<ul class="list list-icons list-dark mt-5">
							<li><i class="far fa-clock top-7"></i> Monday - Friday - 9am to 5pm</li>
							<li><i class="far fa-clock top-7"></i> Saturday - 9am to 2pm</li>
							<li><i class="far fa-clock top-7"></i> Sunday - Closed</li>
						</ul>

					</div>
				</div>
			</div>
 <div id="map" style="height: 400px;width: 100%"></div>

		<?php include'footer.php'; ?>

		<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 0.0236, lng: 37.9062},
          zoom: 13
        });
        var marker = new google.maps.Marker({
    position: {lat: 0.0236, lng: 37.9062},
    map: map,
    title: 'Kenya'
  });
  
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR5PFyvraK8Cqbu-vQu7UAR-NkcABHNuw&libraries=places&callback=initMap"
        async defer></script>
            <!-- MAP BLOCK END -->


 <!-- Map with multiple Locations: -->

	</body>

<!-- Mirrored from preview.oklerthemes.com/porto/8.0.0/demo-insurance-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 17:25:22 GMT -->
</html>