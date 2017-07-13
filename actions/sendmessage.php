<?php
// if send message button selected
if(isset($_POST['sendmessage'])){

?>

<?php
date_default_timezone_set("Asia/Colombo");

  $sendingdate = date('Y-m-d H:i:s ', time());
$id=

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$c_number=$_POST['contact_number'];
$country=$_POST['country_name'];
$body=$_POST['message'];
$id=$sendingdate.$email;

    $sqladminmessage="INSERT INTO messages (Fname,Lname,Email,c_number,country,message,ID,Date_Time) VALUES ('$fname','$lname','$email','$c_number','$country','$body','$id','$sendingdate')"; 

    include ('db.php'); 

 if (mysqli_query($conn,$sqladminmessage)=== FALSE) {
  // ; $conn->query($sqladminmessage)
               
                            echo '<script type="text/javascript">',
                'alert("Error occured!. Retry");',
                '</script>';

  
            }else{

                           echo '<script type="text/javascript">',
                'alert("Message Sent");',
                '</script>';

            }


header("Location: ../pages/contact.php");    
}


