<?php
    include 'db.php';
    
    if(isset($_POST["function"])&&($_POST["function"]=="dltpost")){
        $id=$_POST["id"];
        $sql = "DELETE FROM post WHERE id='$id'";
    
        $result = mysqli_query($conn,$sql);
        $sql = "DELETE FROM comment WHERE postid='$id'";
  
        $result = mysqli_query($conn,$sql);
    }else{
        $subject=mysqli_real_escape_string($conn,$_POST["subject"]);
        $title=mysqli_real_escape_string($conn,$_POST["title"]);          
        $description=mysqli_real_escape_string($conn,$_POST["description"]);
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
                        $description = $description.'<a href="'.$tmp.'">'.$tmp.'</a>';
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
        $sql = "";
        if($_FILES["file"]["name"]!=""){
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            $name = uniqid()."pic.".$file_extension;
            $sourcePath = $_FILES["file"]['tmp_name']; // Storing source path of the file in a variable
            $targetPath = "../images/Post/".$name; // Target path where file is to be stored
            move_uploaded_file($sourcePath,$targetPath);
            $sql = "INSERT INTO post(subject,title,description,picture) values('$subject','$title','$description','images/Post/$name')";
        }else{
            $sql = "INSERT INTO post(subject,title,description,picture) values('$subject','$title','$description','images/Post/default.png')";
        }            

        mysqli_query($conn,$sql);
        

        session_start();
        $_SESSION['temp']="Your post created successfully";
        header("Location: ../pages/admin/admin.php");
    }
?>