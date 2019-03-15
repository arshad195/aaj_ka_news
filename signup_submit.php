<?php
session_start();
//header('location:homepage.php');

$password = $_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword){


$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "ungineering";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
}

mysqli_select_db($conn, 'ungineering');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$check = "SELECT email FROM users WHERE email = '$email'";
$check_for_username = mysqli_query($conn, $check);
//Query to check if email is available or not 
//$check = (mysql_num_rows($check_for_username)) {
$row = mysqli_num_rows($check_for_username);
if ($row == 1) {
//If there is a  record match in the Database - Not Available
    echo"<script>alert('this email are already used')</script>";
    echo"<script>location.href='signup.php'</script>";
} else {
    // echo '0'; //No Record Found - Email is available 
    
    $sql = "INSERT INTO users (name,email,password) values('$name','$email','$password')";
    if (!mysqli_query($conn, $sql)) {
        die("Error :" . $sql . "<br>" . mysqli_error($conn));
    }
}


mysqli_close($conn);
echo"<script>alert('you are successfully signup')</script>";
echo"<script>location.href='homepage.php'</script>";
    
}

 else {
    echo"<script>alert('your password and confirm password are not same')</script>";
    echo"<script>location.href='signup.php'</script>";
}
?>

