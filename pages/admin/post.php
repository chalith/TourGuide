<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../css/mycss.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		
		



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

<?php include 'adminheader.php' ?>


	
	<div id="pagebody" style="max-width:1150px;">
	

		



			<?php
				include '../../actions/db.php';

				$sql = "SELECT * FROM post";
  
  				$result = mysqli_query($conn,$sql);
  
				if ($result->num_rows > 0) {
					while($row= $result->fetch_assoc() ) {
			?>
			
		<div class="panel panel-default" style="border-color:#416143;">
			<div class="panel-heading"style="background-color:#416143; border-color:#416143;">
				<div class="row">
					<div class="col-sm-6 pull-left">
						<img src="../../images/Admin/admin.png" width="35px" height="35px"/>
						<span style="color:white;">Admin</span>
						<button class="btn pull-right right" onclick="deletepost(<?php echo $row["id"] ?>)">delete</button>
					</div>
				</div>
				
			</div>
			<div class="panel-body">
				<div class="col-sm-2 pull-left">
					<img src="../../<?php echo $row["picture"] ?>" alt="" class="img-responsive center-block" />
				</div>
				<div class="col-sm-5 pull-left">
					<div class="col-sm-12 col-xs-12 overimage resize animated fadeIn ">
					<h3 class="text-center" ><?php echo stripslashes($row["subject"]) ?></h3></div>
					<div class="col-sm-12 col-xs-12 overimage resize  animated fadeIn ">
					<h4 class="text-center" ><?php echo stripslashes($row["title"]) ?></h4></div>
					<div class="col-sm-12 col-xs-12 overimage resize animated fadeIn ">
					<h6 class="text-center" ><?php echo stripslashes($row["description"]) ?></h6></div>
					<div class="col-sm-12 col-xs-12 overimage resize animated fadeIn ">
					<l class="text-center" ><?php echo $row["time"] ?></l></div>
				</div>

<div class="col-sm-5 pull-left">
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
						<input name="user<?php echo $row["id"]?>" id="user<?php echo $row["id"]?>" type="text" class="form-control input-sm" placeholder="Name" value="Admin" readonly/>
                        <input name="comment<?php echo $row["id"]?>" id="comment<?php echo $row["id"]?>" type="text" class="form-control input-sm" placeholder="Type your message here..." required/>
                        <input type="hidden" id="postid<?php echo $row["id"]?>" value="<?php echo $row["id"]?>">
						<span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" style="margin-left:1px;" onclick="comment(<?php echo $row["id"]?>)">
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
		<?php
					}
				}
			?>




<script>
				function comment(postid){
					if(!($('#comment'+postid).val()=="")){
						$.ajax({
							type: "POST",
							url: "../../actions/comment.php",
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
						url: "../../actions/comment.php",
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
							url: "../../actions/comment.php",
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
				function deletepost(postid){
					if(confirm("Do you want to delete this comment?")){
						$.ajax({
							type: "POST",
							url: "../../actions/post.php",
							data: {function:"dltpost",id:postid},
							success: function( data, textStatus, jQxhr ){
								location.reload();
							},
							error: function( jqXhr, textStatus, errorThrown ){
								//alert(jqXhr.responseText);
							}
						});
					}
				}
				</script>



		
	</div>

  <script type="text/javascript" src="../../javascript/jquery.js"></script>
  <script type="text/javascript" src="../../css/bootstrap/js/bootstrap.js"></script>
  <script src="../../javascript/myjs.js"></script>
</body>
</html>
