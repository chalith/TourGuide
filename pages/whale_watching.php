<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/whale_watching.css">
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
						<div class="row">
						<div class="container">
							<div class="col-md-12 text-left">
							<h3 data-animation="animated bounceInDown">WHALE WATCHING</h3>
							<h4 data-animation="animated bounceInUp">whale watching is a very good experience.It,s good for heart patients as it makes the human minds very calm.</h4> 
								
							</div>
						<div class="col-md-7 text-left">
							 <!--   <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->           
						</div>
						</div>
						</div>
					</div> 
				<!-- Item 2 -->
					<div class="item slide2">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">BOTTLENOSE DOLPHIN</h3>
								<h4 data-animation="animated bounceInUp">bottle nose dolphin groups can be seen in the srilakan seas. these friendly animlas are very cuteand attractie. </h4>
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
								<h3 data-animation="animated bounceInDown">BLUE WHALE</h3>
								<h4 data-animation="animated bounceInUp">swimming blue whale can  be seen in the sri lanakan seas.  </h4>
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
								<h3 data-animation="animated bounceInDown">WHALE FAMILY</h3>
								<h4 data-animation="animated bounceInUp">sri lankan seas provides nice sites of whale families... </h4>
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
		<p><h2>Whale Watching</h2> Indian Ocean which surrounds Sri Lanka is becoming a crowning location for nature lovers who are interested in whale and dolphin watching. Here you can achieve a fascinating chance of capturing blue whales, Sperm whales and Spinner Dolphins .Dondra point,Mirissa can be defined as the best place to watch whales while Kalpitiya is the best place to watch dolphins. Reliable and Secure Whale and Dolphin watching trips are frequently arranged for nature lovers under the guidance of well-trained guides.

			Sri Lanka is becoming a major spot for watching Whales and Dolphins. Dondra Point of down south in Sri Lanka is the main port of Whale Watching in Sri Lanka during December to April. This is Amazing, The ultimate Ceylon cruise where you can experience scenic highlights of Sri lanka and it's surrounding islands plus it's marine mammals including dolphins and whales in the beautiful Sri Lankan Seas

			Whales, and dolphins or see small pods of dolphins playing around the boat. Wherever the most exciting whale and dolphin activity is, we aim to find it for you. Plus show you some of the most significant cultural and historical parts of this amazing maritime park.
		</p>
	</div>
	<div id="info">
		<h2>Places for Whale Watching</h2>
			<ul>
				<li>Mirissa Beach</li>
		
			</ul>
		<h2>Facilitate Agents:</h2>
	</div>
	<div class="gallery">
  
		<img src="../images/whale_boat.jpg" alt="Northern Lights" width="300" height="200"style="border:solid">
  
			<div class="desc">Whale Watching-speed liner<br>mirissa<br> contact number:0771234567</div>
	</div>
	<div id="abc">
		<!-- Popup Div Starts Here -->
			<div class="contact_form">
			<form action="../actions/sendmessage.php" method="post">
				<img id="close" src="../images/ cancel.png" onclick ="div_hide()">
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
	<script src="../javascript/whale_watching.js"></script>
</body>
</html>

