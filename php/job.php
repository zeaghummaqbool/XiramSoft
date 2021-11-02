<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $adress = $_POST['adress'];
// this is stat to uploading files
// and this is the link of uploading file
    include 'cv.php';
////////////////////END//////////////
    $email = $_POST['email'];

    $sql = "INSERT INTO `job` (`name`, `cat`, `phone`, `qualification`, `adress`,`cv`, `email`, `timestamp`) VALUES ('$name', '$cat', '$phone', '$qualification', '$adress','$target_file','$email', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if ($result){
        header("location: ../apply-job.html");
    }
    else{
        echo "something is an error";
    }


}

?>
