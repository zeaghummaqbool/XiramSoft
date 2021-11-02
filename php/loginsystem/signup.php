<?php
// $showAlert = false;
// $showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '../partials/dbconnect.php';
// include 'partials/dbconnect.php';
$username = $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
// header ("location: login.php");
// $exists = false;

//check whether this user email Exits
$existSql = "SELECT * FROM `loginsystem` WHERE email = '$email'";
$result = mysqli_query($conn, $existSql);
$numExistRow = mysqli_num_rows($result);
if ($numExistRow>0){
  // $exists = true;
  echo "your email is already exit";
}
// else{
//    $exists = false;
// }

elseif(($password == $cpassword)){
  $hash = password_hash($password, PASSWORD_DEFAULT );
$sql = "INSERT INTO `loginsystem` (`username`,`email`, `password`, `timestamp`) VALUES ('$username','$email', '$hash', CURRENT_TIMESTAMP())";
$result = mysqli_query($conn, $sql);
if($result){
  echo "you are signed up successfully";

}
}
else{ 
  echo "password is not match please try again";
}

}
// if($showAlert){
//   echo "you are sign up successfully";
// }
// if($showerror){
//   echo "Something went to wrong";
// }
?>