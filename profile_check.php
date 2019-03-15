<?php

session_start();
//header('location:dashboard.php');

$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "ungineering";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
}

mysqli_select_db($conn, 'ungineering');
$name = $_SESSION['profile'].[value];
//$email = $_POST['email'];
//$password = $_POST['password'];

$q = "select * from users where name='$name' ";
 
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);
if ($num == 1) {
    
    echo "<script> location.href='dashboard.php' </script>";
}
?>