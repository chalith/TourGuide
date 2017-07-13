
		
		
	


	<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico">
    <title>TourGuidSriLanka</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="../css/bootstrap/js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.min.css" />
    </head>
    <body class="body-top">
    <div style="background-color:#001702;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="header-top">
	    <div class="container">
	      <h1 class="header-text">Tour Guide Sri Lanka</h1>
	    </div>
	  </div>
	  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Take Your Guidance</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
		  	<li role="presentation"><a href="Home.php"><span class="glyphicon glyphicon-home"> Home</a></li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn"><span class="glyphicon glyphicon-star"> Activities</a>
						<div class="dropdown-content" style="width:100%;">
							<a href="sea_side.php"> Sea Side</a>
							<a href="river.php"> River Side</a>
							<a href="wildlife.php"> Wild Life</a>
							
						</div>
				</li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn"><span class="glyphicon glyphicon-globe"> Places</a>
						<div class="dropdown-content" style="width:100%;">							
							<a href="culture.php"> Culture</a>
							<a href="hill_country.php"> Hill Country</a>
							<a href="historical.php"> Historical</a>
						</div>
				</li>
				<li role="presentation"><a href="reviews.php"><span class="glyphicon glyphicon-star-empty"> Reviews</a></li>
				<li role="presentation"><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
				<?php
					if(!(isset($_SESSION['username']))){
				?>
				<li role="presentation"><a href="#" id="myBtn"><span class="glyphicon glyphicon-log-in"> Login</a></li>
				<?php
					}else{
				?>
				<li role="presentation"><a href="admin/admin.php"><span class="glyphicon glyphicon-user"> Profile</a></li>
				<?php
					}
				?>
            
          </ul>
		  <select id="select" style="float:right;">
				  <option value="">Looking For..</option>
				  <option value="whale_watching.php">Whale Watching</option>
				  <option value="safari.php">Wild safari</option>
				  <option value="surfing.php">Surfing</option>
				  <option value="diving.php">Diving</option>
				  <option value="sunbathe.php">Sun bathing</option>
				  <option value="historical.php">Historical place visit</option>
				  <option value="hill_country.php">Hill country visit</option>
				  <option value="ayurveda.php">Ayurvedic spa</option> 
				  <option value="meditation.php">Meditation and Yoga</option>
				  </select>
					<script>
			document.getElementById("select").onchange=function(){
				if(this.selectedIndex!==0){
					window.location.href=this.value;
				}
			};
		</script>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		
  </body>
</html>
