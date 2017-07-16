<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/checkbox.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				
</head>
<body >
<div id="full_page" >
	<?php include 'header.php'; 
	if(isset($_SESSION['try'])&&($_SESSION['try']=="on")&&!(isset($_SESSION['start']))){
		echo '<script type="text/javascript">','alert("You are not signed up");','</script>'; 
	}
	$_SESSION['try']="off"

	?>
	
	<div id="pagebody">

	<div class="container">
  
	<!-- Trigger the modal with a button -->
	<!-- <button type="button" class="btn btn-default btn-lg pull-right" id="myBtn">Login</button> -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal &times";></button>
				<h5><span class="glyphicon glyphicon-lock"></span> Login</h5>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
			<form role="form" method="post" action="../actions/login.php">
				<div class="form-group">
					<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
					<input type="text" name="email" class="form-control" id="usrname" placeholder="Enter email" required>
				</div>
				<div class="form-group">
					<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
					<input type="password"  name="password" class="form-control" id="psw" placeholder="Enter password" required>
				</div>
				
				<button type="submit" name="submit" class=" btn-success btn"><span class="glyphicon glyphicon-off"></span>Login</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

			</div>
		</div>
      
		</div>
	</div> 
	</div>
	<br>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

	<div class="col-md-12">
		<div id="first-slider" class="col-md-10">
			<div id="carousel-example-generic" class="carousel slide carousel-fade">
				<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						<li data-target="#carousel-example-generic" data-slide-to="6"></li>
						<li data-target="#carousel-example-generic" data-slide-to="7"></li>
					</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<!-- Item 1 -->
						<div class="item active slide1">
							<div class="row">
								<div class="container">
									<div class="col-md-9 text">
									<h3 data-animation="animated bounceInDown">WELCOME</h3>
									<h4 data-animation="animated bounceInUp">SRILANKA</h4>        
									</div>
								<div class="col-md-7 text-left">
									<!--   <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->
									    
								</div>
								</div>
							</div>
						</div> 
					<!-- Item 2 -->
					<div class="item slide2">
						<div class="row">
							<div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">CLIMATE VARIATION</h3>
									<h4 data-animation="animated bounceInUp">SRI LANKAN SEA SIDES </h4>
								 </div>
								<div class="col-md-5 text-right">
					  
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
								</div>
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="item slide3">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">PLENTY OF WILD LIFE</h3>
								<h4 data-animation="animated bounceInUp">SRI LANKAN RAIN FORESTS</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> -->
							</div>     
						</div></div>
					</div>
					<!-- Item 4 -->
					<div class="item slide4">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">SRI LANKAN CULTURE</h3>
								<h4 data-animation="animated bounceInUp">AYURVEDA MEDICINES</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 4 -->

                        <!-- Item 5 -->
					<div class="item slide5">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">SRI LANKAN UPPER HILLS</h3>
								<h4 data-animation="animated bounceInUp">SRI LANKAN WATERFALLS</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 5 -->

                        <!-- Item 6 -->
					<div class="item slide6">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">PROUD HISTORY</h3>
								<h4 data-animation="animated bounceInUp">SRI LANKAN CAVE TEMPLES</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 6 -->

                        <!-- Item 7 -->
					<div class="item slide7">
						<div class="row"><div class="container">
							<div class="col-md-9 text-left">
								<h3 data-animation="animated bounceInDown">PLENTY OF RIVERS</h3>
								<h4 data-animation="animated bounceInUp">PICTURESQUE VIEW</h4>
							 </div>
							<div class="col-md-5 text-right">
								<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
							</div>  
						</div></div>
					</div>
					<!-- End Item 7 -->

                        
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
	
		<p> Sri Lanka is an amazing tiny island surrounded by the bluish Indian Oean.Because of the enchanting beauty of this island it is named as the pearl of the Indian Ocean.It is the beauty queen all over the world
		and the calm and quite nature of her afford a great relaxation.</p>
	</div>
<br>
<div id="photoGallery">

<div class="gallery">
  <a  href="sea_side.php">
    <img src="../images/sri_lanka_turtle-700x394.jpg" alt="Fjords" width="300" height="200">
  </a>
  <div class="desc">Sea Side</div>
</div>

<div class="gallery">
  <a  href="culture.php">
    <img src="../images/traditional-dances-of-sri-lanka-august-2011-2.jpg" alt="Forest" width="300" height="200">
  </a>
  <div class="desc">Culture</div>
</div>

<div class="gallery">
  <a  href="historical.php">
    <img src="../images/5.jpg" alt="Northern Lights" width="300" height="200">
  </a>
  <div class="desc">Historical</div>
</div>

<div class="gallery">
  <a  href="hill_country.php">
    <img src="../images/tea.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Hill Country</div>
</div>

<div class="gallery">
  <a  href="wildlife.php">
    <img src="../images/deer.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Wild Life</div>
</div>

<div class="gallery">
  <a  href="river.php">
    <img src="../images/Mahaweli_Ganga_by_Gampola.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">River Side</div>
</div>

</div>

	

	
		

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>		

<?php
		include '../actions/db.php';

		$sql = "SELECT * FROM post";

		$result = mysqli_query($conn,$sql);

		if ($result->num_rows > 0) {
?>
<h3>Discussion</h3>

			
			<?php
					$array = array();
					while($row= $result->fetch_assoc() ) {
						array_push($array,$row);
					}
					for($i=sizeof($array)-1;$i>=0;$i--){
						$row = $array[$i];
			?>
			
		<div class="panel panel-default" style="border-color:#416143;">
			<div class="panel-heading" style="background-color:#416143; border-color:#416143;">
				<div class="row">
					<div class="col-sm-6 pull-left">
						<img src="../images/Admin/admin.png" width="35px" height="35px"/>
						<span style="color:white;">Admin</span>
					</div>
				</div>
				
			</div>
			<div class="panel-body">
				<div class="col-sm-2 pull-left">
					<img src="../<?php echo $row["picture"] ?>" alt="" class="img-responsive center-block" />
				</div>
				<div class="col-sm-10 pull-left">
					<div class="col-sm-12 col-xs-12 overimage resize animated fadeIn ">
					<h3 class="text-center" ><?php echo stripslashes($row["subject"]) ?></h3></div>
					<div class="col-sm-12 col-xs-12 overimage resize  animated fadeIn ">
					<h4 class="text-center" ><?php echo stripslashes($row["title"]) ?></h4></div>
					<div class="col-sm-12 col-xs-12 overimage resize animated fadeIn ">
					<p><?php echo nl2br(stripslashes($row["description"])) ?></p></div>
					<div class="col-sm-12 col-xs-12 overimage resize animated fadeIn ">
					<l class="text-center" ><?php echo $row["time"] ?></l></div>
				</div>

<div class="row">
<div class="col-sm-12 pull-left">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" style="border-color:#416143;">
                <div class="panel-heading" id="accordion<?php echo $row["id"]?>" style="background-color:#416143; border-color:#416143;">
                    <span class="glyphicon glyphicon-comment"></span> Comments
                    <div class="btn-group pull-right">
                        <a type="button" onclick="loadcomment(<?php echo $row["id"]?>)" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion<?php echo $row["id"]?>" href="#collapseOne<?php echo $row["id"]?>">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne<?php echo $row["id"]?>">
                <div class="panel-body">
                    <ul class="chat" style="overflow-y:scroll; max-height:250px;" id="chatroom<?php echo $row["id"]?>">
                        
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
						<input name="user<?php echo $row["id"]?>" id="user<?php echo $row["id"]?>" type="text" class="form-control input-sm" placeholder="Name" value="Anonymous"/>
                        <input name="comment<?php echo $row["id"]?>" id="comment<?php echo $row["id"]?>" type="text" class="form-control input-sm" placeholder="Type your message here..." required/>
                        <input type="hidden" id="postid<?php echo $row["id"]?>" value="<?php echo $row["id"]?>">
						<span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" style="margin-left:1px;"  onclick="comment(<?php echo $row["id"]?>)">
                                Post</button>
                        </span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

			</div>
<div class="panel-footer" style="background-color:#9FB4A0; border-color:#416143;">
			<div class="col-sm-6 pull-left">
				<form>
					<label class="radio-inline"><input type="radio" id="optradio1<?php echo $row["id"]?>"></label>
					<label class="radio-inline"><input type="radio" id="optradio2<?php echo $row["id"]?>"></label>
					<label class="radio-inline"><input type="radio" id="optradio3<?php echo $row["id"]?>"></label>
					<label class="radio-inline"><input type="radio" id="optradio4<?php echo $row["id"]?>"></label>
					<label class="radio-inline"><input type="radio" id="optradio5<?php echo $row["id"]?>"></label>
					<label class="radio-inline"><input type="button" class="btn btn-success" value="Submit" onclick="rate(<?php echo $row["id"]?>)"></label>
				</form>
		</div>
		<div class="col-sm-6 pull-left" id="showrate<?php echo $row["id"]?>">
		</div>
		<br><br>
</div>
<script>
	$(window).load(function(){
		loadRate("<?php echo $row["id"]?>");
	});
	$('#optradio2<?php echo $row["id"]?>').change(function(){
		$('#optradio1<?php echo $row["id"]?>').prop("checked", true);
	});
	$('#optradio3<?php echo $row["id"]?>').change(function(){
		$('#optradio1<?php echo $row["id"]?>').prop("checked", true);
		$('#optradio2<?php echo $row["id"]?>').prop("checked", true);
	});
	$('#optradio4<?php echo $row["id"]?>').change(function(){
		$('#optradio1<?php echo $row["id"]?>').prop("checked", true);
		$('#optradio2<?php echo $row["id"]?>').prop("checked", true);
		$('#optradio3<?php echo $row["id"]?>').prop("checked", true);
	});
	$('#optradio5<?php echo $row["id"]?>').change(function(){
		$('#optradio1<?php echo $row["id"]?>').prop("checked", true);
		$('#optradio2<?php echo $row["id"]?>').prop("checked", true);
		$('#optradio3<?php echo $row["id"]?>').prop("checked", true);
		$('#optradio4<?php echo $row["id"]?>').prop("checked", true);
	});
</script>

		</div>
		<?php
					}
				}
			?>

<script>
				function comment(postid){
					if(!($('#comment'+postid).val()=="")){
						$.ajax({
							type: "POST",
							url: "../actions/comment.php",
							data: {function:"comment",postid:$('#postid'+postid).val(),user:$('#user'+postid).val(),comment:$('#comment'+postid).val()},
							success: function( data, textStatus, jQxhr ){
								$('#comment'+postid).val("");
								loadcomment(postid);
							},
							error: function( jqXhr, textStatus, errorThrown ){
								//alert(jqXhr.responseText);
							}
						});
					}
				}
				function loadcomment(postid){
					$.ajax({
						type: "POST",
						url: "../actions/comment.php",
						data: {function:"getcomment",postid:$('#postid'+postid).val()},
						success: function( data, textStatus, jQxhr ){
							$('#chatroom'+postid).html(data);
						},
						error: function( jqXhr, textStatus, errorThrown ){
							//alert(jqXhr.responseText);
						}
					});
				}
				function deletecomment(commentid,postid){
					if(confirm("Do you want to delete this comment?")){
						$.ajax({
							type: "POST",
							url: "../actions/comment.php",
							data: {function:"dltcmnt",id:commentid},
							success: function( data, textStatus, jQxhr ){
								loadcomment(postid)
							},
							error: function( jqXhr, textStatus, errorThrown ){
								//alert(jqXhr.responseText);
							}
						});
					}
				}
				function rate(postid){
					var rateval = 0;
					if($('#optradio1'+postid).prop("checked")){
						rateval = 1;
					}
					if($('#optradio2'+postid).prop("checked")){
						rateval = 2;
					}
					if($('#optradio3'+postid).prop("checked")){
						rateval = 3;
					}
					if($('#optradio4'+postid).prop("checked")){
						rateval = 4;
					}
					if($('#optradio5'+postid).prop("checked")){
						rateval = 5;
					}
					$.ajax({
						type: "POST",
						url: "../actions/comment.php",
						data: {function:"rate",postid:$('#postid'+postid).val(),rate:rateval},
						success: function( data, textStatus, jQxhr ){
							loadRate(postid);
						},
						error: function( jqXhr, textStatus, errorThrown ){
							//alert(jqXhr.responseText);
						}
					});
				}
				function loadRate(postid){
					$.ajax({
						type: "POST",
						url: "../actions/comment.php",
						data: {function:"getrate",postid:$('#postid'+postid).val()},
						success: function( data, textStatus, jQxhr ){
							$('#showrate'+postid).html("<h4 style=\"color:white;\">Rating : "+data+" %</h4>");
						},
						error: function( jqXhr, textStatus, errorThrown ){
							//alert(jqXhr.responseText);
						}
					});
				}
				</script>
</div>

<div style="margin-top:-40px;" id="service">
<br>
<h3>OUR SERVICE</h3>

<p><small>You will never feel strange when we are in your service.We accept the responsibility of providing a friendly and secure tour for you with full of trust.
We are eager to direct you to the places you love to visit, without any hesitation.
By contacting us you will be able to find out the best suited places for your journey according to your taste and also you can seek for most comfortable and safe places for accommodation.
From the arrival to Sri Lanka till the departure we will serve you heartfully creating remarkable memories of a wonderful journey in your heart. 
</small></p>
</div>
</div>
</div>

  <script type="text/javascript" src="../javascript/jquery.js"></script>
  <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
<script src="../javascript/myjs.js"></script>
</body>
</html>
