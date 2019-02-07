<?php

session_start();
header('location:homepage.php');

$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "ungineering";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO users (name,email,password) values('$name','$email','$password')";
if (!mysqli_query($conn, $sql)) {
    die("Error :" . $sql . "<br>" . mysqli_error($conn));
}


mysqli_close($conn);
?>

