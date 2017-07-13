<?php
include 'db.php';
   session_start();
//$loca = $_GET['csrc'];
  
  if(isset($_POST["submit"])){
  $_SESSION['try']="on";
  $email=mysqli_real_escape_string($conn,$_POST["email"]);
  $pswd=mysqli_real_escape_string($conn,$_POST["password"]);
            
  $sql = "SELECT name FROM user WHERE Password='$pswd' AND Email='$email'";
  
  $result = mysqli_query($conn,$sql);
    // $count =mysqli_fetch_array($result);
        
        

        if(mysqli_num_rows($result)>0){
            $_SESSION['username']=$email;
            $_SESSION['password']=$pswd;
            
           $_SESSION['start'] = time(); // Taking now logged in time.
           header("Location: ../pages/admin/admin.php");
           
  }else{
      
			 header("Location: ../pages/Home.php");
        }
        
   }

  ?>
