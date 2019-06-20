<?php
if (!isset($_session)) {session_start();}
 require('db_connect.php');
if (isset($_POST['user_name']) and isset($_POST['user_pass'])){
// Assigning POST values to variables.
$username = $_POST['user_name'];
$password = md5($_POST['user_pass']);

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE user_name='$username' and user_pass='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
// *** Validate request to login to this site.

if ($count == 1){
    $data = mysqli_fetch_array($result);
    $_SESSION["user_name"]= $data['user_name'];
    header("Location: ../index.php");
    //echo "Login Credentials verified";
    //echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    exit();
}else{
    echo "<script type='text/javascript'>alert('Wrong Username or Password');
        location='../login-page.php';</script>";
    //header("Location: ../login-page.php");
    //echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    //echo "Invalid Login Credentials";
}
}
header("Location: ../index.php");
?>