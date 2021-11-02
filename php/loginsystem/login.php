<?php
// $login = false;
// $showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '../partials/dbconnect.php';
$email = $_POST['email'];
$password = $_POST['password'];


        // $sql = "Select *from users where username = '$username' AND password = '$password'";
        $sql = "SELECT * from `loginsystem` WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if ($num ==1){
        while($row = mysqli_fetch_assoc($result)){
        if (password_verify($password, $row['password'])){
          echo "you are now logged in";
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        // header("location: welcome.php");
        }
        else{
          echo "invalid Credentials";
        }
}
}
else{
  echo "invalid Credentials";
}
}
?>

  