<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../css/mycss.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
		



	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				
</head>
<body >
<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: ../pages/Home.php"); 
	}
	if(isset($_SESSION['temp'])&&($_SESSION['temp']!=null)){
		echo '<script type="text/javascript">','alert("',$_SESSION['temp'],'");','</script>';
	}
	$_SESSION['temp']=null;
?>

<div id="full_page" >
<?php include 'adminheader.php' ?>
<div id="pagebody">
<div class="col-sm-12 pull-left">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" style="border-color:#416143;">
                <div class="panel-heading" id="accordionadmin" style="background-color:#416143; border-color:#416143;">
                    <span class="glyphicon glyphicon-tag"></span>&nbsp Create Post
					<div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordionadmin" href="#collapseOneadmin">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOneadmin">
                <div class="panel-body">
					<h2>Create Post</h2>
                    
                <div class="row">
					
					<div class="col-md-8 col-md-offset-2">
						
						<form action="../../actions/post.php" method="POST" enctype=multipart/form-data>
							<div class="form-group">
								<label>Select a picture</label>
								<div id="filein">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
										<input class="form-control" type="file" name="file" id="file"/>
									</div>
									<div class="picdiv"><img style="max-height:250px;" id="pic" src="" alt="No picture selected"/></div>
								</div>
							</div>
							<script>
								$('#file').on("change", function () {
									var path = document.getElementById("file");
									readURL(path, "pic");
								});
								function readURL(input, imgtg) {

									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#' + imgtg).attr('src', e.target.result);
										};

										reader.readAsDataURL(input.files[0]);
									}
								}
							</script>

							<div class="form-group">
								<label for="title">Subject<span class="require">*</span></label>
								<input type="text" class="form-control" name="subject" required/>
							</div>
							
							<div class="form-group">
								<label for="title">Title <span class="require">*</span></label>
								<input type="text" class="form-control" name="title" required/>
							</div>
							
							<div class="form-group">
								<label for="description">Description <span class="require">*</span></label>
								<textarea rows="5" class="form-control" name="description" required></textarea>
							</div>
							
							<div class="form-group">
								<p><span class="require">*</span> - required fields</p>
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">
									Create
								</button>
								<button class="btn btn-default">
									Cancel
								</button>
							</div>
							
						</form>
					</div>
		
				</div>


                </div>
			</div>
		</div>
	</div>
</div>
</div>





<div class="col-sm-12 pull-left">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" style="border-color:#416143;">
                <div class="panel-heading" id="accordionmessage" style="background-color:#416143; border-color:#416143;">
                    <span class="glyphicon glyphicon-comment"></span> Messages
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordionmessage" href="#collapseOnemessage">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOnemessage">
                <div class="panel-body">
                    <ul class="chat" style="overflow-y:scroll; max-height:750px;">
                        <?php
							include '../../actions/db.php';
							$sql = "SELECT * FROM messages";

							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row= $result->fetch_assoc() ) {

						?>
							<li class="left clearfix" style="max-width:100%;"><span class="chat-img pull-left">
                            <img src="http://localhost/TourGuid//images/Admin/admin.png" width="35px" height="35px" class="img-circle" />
								</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font"><?php echo $row["Fname"]." ".$row["Lname"]." (".$row["Email"].", ".$row["c_number"].") ".$row["country"] ?>'</strong> <small class="pull-right text-muted">
												<span class="glyphicon glyphicon-time"></span><?php echo $row["Date_Time"] ?></small>
										</div>
										<a style="color:black; max-width:100%;"><?php echo $row["message"] ?></a>
									</div>
								</li>
						<?php
								}
							}
						?>
							
                    </ul>
                </div>
                
            </div>
            </div>
        </div>
    </div>
</div>



		
	</div>

</div>

  <script type="text/javascript" src="../../javascript/jquery.js"></script>
  <script type="text/javascript" src="../../css/bootstrap/js/bootstrap.js"></script>
  <script src="../../javascript/myjs.js"></script>
</body>
</html>
