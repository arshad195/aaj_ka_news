<?php

session_start();

$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "ungineering";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, 'ungineering');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$q = "select * from users where email= '$email' && password='$password' && name='$name' ";

$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);
if ($num == 1) {
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['email']=$email;
    //eader('location:homepage.php');
    echo "<script> location.href='homepage.php' </script>";
} else {
    //header('location:login.php');


    echo"<script>alert('your password or email are wrong')</script>";

    echo "<script> location.href='signin.php' </script> ";
}


//echo $password;
//if (!$result) {
//  die(mysqli_error($conn));
//}
//while ($row = mysqli_fetch_array($result)) {
//  echo $row['email'] . "<br/>";
//}
//mysqli_close($conn);
?>
