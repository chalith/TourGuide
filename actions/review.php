
<?php
date_default_timezone_set("Asia/Colombo");

  $sendingdate = date('Y-m-d H:i:s ', time());

$name=$_POST['name'];
$email=$_POST['email'];
$review=$_POST['review'];

    $enterreview="INSERT INTO review (Name,Email,Review,date_time) VALUES ('$name','$email','$review','$sendingdate')"; 

    include ('db.php'); 

 if (mysqli_query($conn,$enterreview)=== FALSE) {
  // ; $conn->query($sqladminmessage)
               
                            echo '<script type="text/javascript">',
                'alert("Error occured!. Retry");',
                '</script>';

  
            }else{
                           echo '<script type="text/javascript">',
                'alert("Review Saved");',
                '</script>';

            }


header("Location: ../pages/reviews.php");    


