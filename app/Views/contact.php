<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
</section>
	<section id="content">
	
	<div class="container">
	<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>CONTACT INFORMATION</h3>
									<i class="fa fa-envelope"> ptloremipsum@gmail.com</i>
									<br>
									<i class="fa fa-user"> 021 5385 488</i>
								</div> 
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<h4>Send Your Message</h4>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<div class="alert alert-error hidden" id="contactError">
										<strong>Error!</strong> There was an error sending your message.
									</div>
									<div class="contact-form">
										<form onsubmit="sendEmail(); reset(); return false;" id="contact-form" role="form" novalidate="novalidate">
											<div class="form-group has-feedback">
												<label for="name">Name*</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Email*</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="subject">Subject*</label>
												<input type="text" class="form-control" id="subject" name="subject" placeholder="">
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="message">Message*</label>
												<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Submit" class="btn btn-default">
										</form>
									</div>
								</div>
			<div class="col-md-6">
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script src="https://smtpjs.com/v3/smtp.js"></script>
					<script>
						function sendEmail(){
							Email.send({
							SecureToken : "727175f7-bc0e-41bc-95b8-e8e7dc2b5b95",
					    	To : 'upilmao4@gmail.com',
					    	From : 'upilmao4@gmail.com',
					    	Subject : document.getElementById("subject").value,
					    	Body : "Nama: " + document.getElementById("name").value 
					    			+ "<br> Pesan: " + document.getElementById("message").value
					    			+ "<br> From:  " + document.getElementById("email").value
							}).then(message => alert("Email berhasil terkirim")
							);
						}
					</script>
			</div>


			<div class="col-md-6">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
	
			</script>
			<div style="overflow:hidden;height:500px;width:600px;">
				<div id="gmap_canvas" style="height:500px;width:600px;"></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				<a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
			</div>
			<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(-6.2903522,106.6659874),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-6.2903522,106.6659874)});infowindow = new google.maps.InfoWindow({content:"<b>PT. DIVA BUANA VALASIONDO PRATAMA<br/>Tangerang Selatan" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			</script>
			</div>
		</div>
	</div>
 
</section>

	<?= $this->endSection() ?>