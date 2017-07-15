<?php
include 'db.php';
$para = $_POST["function"];
if($para=="comment"){
    $postid=$_POST["postid"];
    $description=mysqli_real_escape_string($conn,$_POST["comment"]);
    $user=mysqli_real_escape_string($conn,$_POST["user"]);
    $splitarr1 = explode('\r\n',$description);
        $description = "";
        foreach($splitarr1 as $tmp1){
            $splitarr2 = explode(" ", $tmp1);
            foreach($splitarr2 as $tmp){
                if(strlen($tmp)>=7){
                    $islink = 0;
                    $part1 = substr($tmp,0,7);
                    $part2 = substr($tmp,0,8);
                    if($part1 == "http://"){
                        $islink = 1;
                    }else if($part2 == "https://"){
                        $islink = 1;
                    }
                    if($islink == 1){
                        $description = $description.'<a style="color:blue;" href="'.$tmp.'">'.$tmp.'</a>';
                    }else{
                        $description = $description.$tmp;
                    }
                }else{
                    $description = $description.$tmp;
                }
                $description = $description." ";
            }
            $description = $description."\n";
        }
    if($user==""){
        $user = "Anonymous";    
    }     
    $sql = "INSERT INTO comment(postid,user,comment) values('$postid','$user','$description')";

    mysqli_query($conn,$sql);
}else if($para=="getcomment"){
    session_start();
    
    $postid=$_POST["postid"];
    
    $sql = "SELECT * FROM comment WHERE postid='$postid'";
  
    $result = mysqli_query($conn,$sql);

    $out = "";
    if ($result->num_rows > 0) {
        while($row= $result->fetch_assoc() ) {
                        $deletebtn = "";
	
                        if(isset($_SESSION['username'])){
                            $deletebtn = '<a style="color:red;" onclick="deletecomment('.$row["id"].','.$postid.')">delete</a>';
                        }

                        $out = $out.'<li class="left clearfix" style="max-width:100%;"><span class="chat-img pull-left">
                            <img src="http://localhost/TourGuid//images/Admin/admin.png" width="35px" height="35px" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">'.stripslashes($row["user"]).'</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>'.$row["time"].'</small>
                                </div>
                                <h6 style="color:black; max-width:100%;">'.stripslashes($row["comment"]).'</h6>
                                &nbsp&nbsp&nbsp&nbsp'.$deletebtn.'</div></li>';
        }
    }
    echo $out;
}else if($para=="dltcmnt"){
    $id=$_POST["id"];
    $sql = "DELETE FROM comment WHERE id='$id'";
  
    $result = mysqli_query($conn,$sql);
}else if($para=="rate"){
    $postid=$_POST["postid"];
    $rate=$_POST["rate"];
    $sql = "UPDATE post SET rate = rate + $rate, raters = raters + 1 WHERE id='$postid'";

    mysqli_query($conn,$sql);
}
else if($para=="getrate"){
    $postid=$_POST["postid"];
    $sql = "SELECT rate,raters FROM post WHERE id='$postid'";
    $out = "0";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        while($row= $result->fetch_assoc()) {
            if((int)$row["raters"]>0){
                $out = (float)$row["rate"]*100/((int)$row["raters"]*5);
            }else{
                $out = 0;
            }
        }
    }
    echo $out;
}
?>