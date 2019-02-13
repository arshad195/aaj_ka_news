

<?php
session_start();
header('location:dashboard.php');

$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "ungineering";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
}

// $conn = mysqli_connect('localhost', 'root');
// mysqli_select_db($conn, $ungineering);
if (isset($_POST["submit"])) {
    //$username = $_POST['name'];
    $files = $_FILES['file'];
    // print_r($files);
    $filename = $files['name'];

    //  print_r($filename);
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    // echo $filetmp;
    $filetext = explode('.', $filename);
    $filecheck = strtolower(end($filetext));
    $fileextstored = array('png', 'jpg', 'jpeg');
    if (in_array($filecheck, $fileextstored)) {
        $distinationfile = "picture/" . $filename;
        //echo $distinationfile;
        move_uploaded_file($filetmp, "picture/" . $filename);
        ?>
        <?php
        $img = "insert into pic (pic) values('$distinationfile')";
        $query = mysqli_query($conn, $img);
        $displayquery = "select pic from pic ";
        $querydisplaying = mysqli_query($conn, $displayquery);

        while ($result = mysqli_fetch_array($querydisplaying)) {
            //  echo $result[pic];
            ?>

            <img src="<?php echo $result[pic]; ?>" height="200px" width="200px;">

            <?php
        }
    }
}
?>


