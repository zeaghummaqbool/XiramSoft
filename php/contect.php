<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/dbconnect.php';
    $email =$_POST['email'];
    $cat=$_POST['cat'];
    $name=$_POST['name'];
    $phone = $_POST['phone'];
    $msg=$_POST['msg'];

    $sql="INSERT INTO `contect` (`email`, `cat`, `name`, `phone`, `msg`, `timestamp`) VALUES ('$email', '$cat', '$name', '$phone', '$msg', current_timestamp())";
    $result= mysqli_query($conn,$sql);
    if ($result){
        header("location: ../contact.html");
    }
    else{
        echo "Something is an error please Try again";
    }
}

?>