<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/ayurveda.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<body >
<div id="full_page" >
<br>
	<?php include 'header.php'; ?>
	<br>
		
	<div id="pagebody">
		<br>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

		<div class="col-md-12">
			<div id="first-slider" class="col-md-10" >
				<div id="carousel-example-generic" class="carousel slide carousel-fade">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						
					</ol>
			<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				<!-- Item 1 -->
					<div class="item active slide1">
						<div class="row"><div class="container">
							<div class="col-md-12 text-left">
							<h3 data-animation="animated bounceInDown">SRI LANKAN AYURVEDA</h3>
								<h4 data-animation="animated bounceInUp">ayurvedic medicine is a sri lankan system of traditiona medicine native to sri lanka,ayurveda treatments have medicine for even illnesses that hard to cure like cancer, diabetic and breaking limbs etc:..</h4>          
							
							</div>
							<div class="col-md-7 text-left">
								<!--   <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->   
							</div>
						</div></div>
					</div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">NATURAL HERBS</h3>
									<h4 data-animation="animated bounceInUp">the special thing of the ayurvedic medicine is that they are extracted from hundred percent natural indigenuous pants grow in sri lanka.</h4>
								 </div>
								<div class="col-md-5 text-right">
					  
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
								</div>
							</div></div>
						</div>
						<!-- Item 3 -->
						<div class="item slide3">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">AYURVEDA TREATMENTS</h3>
									<h4 data-animation="animated bounceInUp">ayurveda treatments are carried on a special way. one way of treating patient is the oil treatments that herbal oils are used to do this treatment.  </h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> -->
								</div>     
							</div></div>
						</div>
						<!-- Item 4 -->
						<div class="item slide4">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">FINDIG THE ROOT OF ILLNESS</h3>
									<h4 data-animation="animated bounceInUp">in ayurveda treatment not only the pain in the body is cured. but also for the root of illness so that the pain willnot come again after some period of times ... </h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
								</div>  
							</div></div>
						</div>
						<!-- End Item 4 -->

							
							
				</div>
					<!-- End Wrapper for slides-->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<div id="paragraph">
			<p><h2>Ayurveda</h2>  Sri Lanka has its own special science of medical treatments since the ancient times which employs indigenous and rare herbs and substances derived from plants. These medications can be used internally or externally as treatment for a number of illnesses as well as to prevent lethal diseases. There are also a wide range of lush treatments using herbs to enhance one's beauty.

				The most popular Ayurvedic Beauty treatment is called "Panchakarma" treatment .It means five treatments which purifies the body completely, by eliminating toxins. An increase of toxins will overburden the body's ability to discharge impurities, weakening the system and creating impairing mental function. Panchakarma effectively stimulates the body's release of toxins which supports the immune system and healing. There are also other treatments depending on your need and the time you are willing to spend in an Ayurvedic spa.

				It is guaranteed that after a splendid Ayurveda treatment you will have clear eyes, a refined skin tone, a robust nervous system, revitalization and regeneration with an increased zest for life.
			</p>
		</div>
		<div id="info">

		<h2>Facilitate Agents:</h2>
		</div>
		<div class="gallery">
		  
			<img src="../images/spa.jpg" alt="Northern Lights" width="300" height="200"style="border:solid">
		  
		  <div class="desc">Ayurveda-Amarasinge spa<br>mirissa<br> contact number:0771234567</div>
		</div>
		<div id="abc">
		<!-- Popup Div Starts Here -->
			<div class="contact_form">
			<form action="../actions/sendmessage.php" method="post">
				<img id="close" src="../images/ whale_boat.jpg" onclick ="div_hide()">
				<label for="name"> Your Name</label><br>
				<input type="text" required="required" id="name" name="name" placeholder="Your Name"/><br><br>
				<label for="email"> Email</label><br>
				<input type="email" required="required"  id="email" name="email" placeholder="Your Email"/><br><br>
				<label for="contact_number"> Contact No.</label><br>
				<input type="text" id= "contact_number" name="contact_number" placeholder="Your Contact Number"/><br><br>
				<label for="message">Message</label><br>
				<textarea id="msg" name="message" placeholder="Your message here.." style="height:200px"></textarea><br><br>
				<input type="submit" name=sendmessage value="submit"/>
			</form>
		</div>
		<!-- Popup Div Ends Here -->
		</div>
<!-- Display Popup Button -->

		<button id="popup" onclick="div_show()">contact us</button>

	</div>
</div>	
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/ayurveda.js"></script>
</body>
</html>

