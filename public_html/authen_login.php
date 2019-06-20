<?php  
if (!isset($_session)) {
    session_start();
    }
 require('db_connect.php');
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = md5($_POST['user_pass']);

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE userName='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
// *** Validate request to login to this site.
if ($count == 1){
    $data = mysqli_fetch_array($result);
    $_session["user_name"]= $data['userName'];
    header("Location: index.html");
    //echo "Login Credentials verified";
    //echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
exit();
}
?>