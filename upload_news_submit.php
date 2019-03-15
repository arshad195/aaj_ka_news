<?php

session_start();
header('location:upload_news.php');

$hostname = "localhost";
$username = "root";
$db_password = "12345678";
$database = "ungineering";

$conn = mysqli_connect($hostname, $username, $db_password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
}



if (isset($_POST["submit"])) {

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {

        $name = $_SESSION['name'];
        $msg = $_POST['news'];
        $email = $_SESSION['email'];
        $title = $_POST['title'];
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
            $distinationfile = "newsPic/" . $filename;
            echo $distinationfile;
            move_uploaded_file($filetmp, "newsPic/" . $filename);

            $img = "insert into status1 (email,name,status,title,pic) values('$email','$name','$msg','$title','$distinationfile')";
            // $query = mysqli_query($conn, $img);


            if (!mysqli_query($conn, $img)) {
                die("Error :" . $img . "<br>" . mysqli_error($conn));
            }
            mysqli_close($conn);

            // $displayquery = "select pic from status1 ";
            //  $querydisplaying = mysqli_query($conn, $displayquery);
            // while ($result = mysqli_fetch_array($querydisplaying)) {
            //echo $result[pic];
            // }
        }
    } else {

        $name = $_SESSION['name'];
        $msg = $_POST['news'];
        $email = $_SESSION['email'];
        $title = $_POST['title'];

        $img = "insert into status1 (email,name,status,title,pic) values('$email','$name','$msg','$title','$distinationfile')";
        // $query = mysqli_query($conn, $img);


        if (!mysqli_query($conn, $img)) {
            die("Error :" . $img . "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    }
}





/* $name = $_SESSION['name'];
  $msg = $_POST['news'];
  $email = $_SESSION['email'];
  //$password = $_POST['password'];
  $sql = "INSERT INTO status (email,name,status) values('$email','$name','$msg')";
  if (!mysqli_query($conn, $sql)) {
  die("Error :" . $sql . "<br>" . mysqli_error($conn));
  }
  //$_SESSION['status']=$status;
  //echo "<script> location.href='upload_news.php'</script>";

  mysqli_close($conn); */
?>
