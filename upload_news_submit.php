 <?php

session_start();
header('location:upload_news.php');

$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "s";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
}

$name = $_SESSION['name'];
$msg = $_POST['news'];
//$password = $_POST['password'];
$sql = "INSERT INTO msg (msg,name)values('$msg','$name')";
if (!mysqli_query($conn, $sql)) {
    die("Error :" . $sql . "<br>" . mysqli_error($conn));
}
//$_SESSION['status']=$status;
//echo "<script> location.href='homepage.php'</script>";

mysqli_close($conn);
?>

