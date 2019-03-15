<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:signin.php');
}
?>


<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width">
        <title>
            update_news
        </title>
        <!--  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> 
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> --> 
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/home.css" />
        <!--<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 


    </head>
    <body>

        <!-- header -->
        <div class="container-fluid topbar ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 ">
                        <h1 class="text-left slam "> AAJ_KA_NEWS </h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div> <!-- end of container_fluid -->


        <!-- 2nd head -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4  news">
                    <img src="pic/news.png" class="news_pic" >
                </div> 
                <div class="col-sm-8 my_menu">

                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> <!-- end of navbar-header-->

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="homepage.php">home</a></li>
                                <li><a href="dashboard.php">user</a></li>
                                <li class="text-danger"><a href="logout.php">logout</a></li>
                            </ul>
                        </div> <!-- end of navbar collapse -->
                    </nav>

                </div>
            </div>  <!-- end of row -->
        </div>  <!-- end of container -->

        <br><br>
        <div class="container">
            <div class="row">

                <form method="POST" action="upload_news_submit.php" id="upload" enctype="multipart/form-data">
 
                        <div class="form-group">
                            <label> TITLE:</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    <div class="form-group">
                        <label>NEWS</label>
                        <textarea class="form-control" rows="5" id="comment" name="news" placeholder="type news"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="file">NEWS PIC:</label>
                        <input type="file" name="file"  class="form-control">
                    </div> 


                    <div class="form-group">
                        <input type="submit" class="btn-lg btn-success" value="upload" name="submit"> 
                    </div>
                </form>
            </div>
        </div>  <!-- end of container -->
        <!-- end of upload section -->
        <br>

        <!-- start show_news_section -->
        <h2 class="text-danger text-center">user's uploaded news</h2>

        <div class="container">
            <div class="row">
                <!--       <div class="col-xs-2 ">
       
                <?php
                /*  session_start();

                $hostname = "localhost";
                $username = "root";
                $db_password = "12345678";
                $database = "ungineering";

                $conn = mysqli_connect($hostname, $username, $db_password, $database);
                if (!$conn) {
                    die("connection faild:" . mysqli_connect_error());
                }
                $name = $_SESSION['name'];
                //  $displayquery = "select pic from pic where name='$name' order by id desc limit 1 ";
                $querydisplaying = mysqli_query($conn, $displayquery);

                while ($result = mysqli_fetch_array($querydisplaying)) {
                    ?>
                                           <img src="<?php echo $result[pic]; ?>" height="80px" width="80px;"  style="border-radius: 50%; "> 
                   
                    <?php
                } */
                ?>
       
                       </div>  -->
                <div class="col-xs-12 text-left" style="border:2px #28a745 solid; padding: 8px">

                    <?php
                    $hostname = "localhost";
                    $username = "root";
                    $db_password = "12345678";
                    $database = "ungineering";

                    $conn = mysqli_connect($hostname, $username, $db_password, $database);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $q = "select * from status1 ";

                    $result = mysqli_query($conn, $q);
                    if (!$result) {
                        die(mysqli_error($conn));
                    }
                    while ($row = mysqli_fetch_array($result)) {
                        ?>


                        <div class="col-xs-12" style="border: 1px darkgreen solid;">

                            <h2><a href="profile_check.php"> <?php $_SESSION['profile'] = $row['name'];
                            echo $row['name']; ?></a></h2> <h3 class="text-left col-sm-6 text-left" style="color:orangered"> <?php echo $row['title']; ?></h3>
                            
                            <?PHP
                          //  if(isset($_FILES['file'])){
                            ?>
                            <img src="<?php echo $row['pic']; ?>" height="150px" width="300px;"  style="border-radius: 20%; ">
                            <?PHP
                           // }
                            ?>
                            :-<p>
                                <?php
                                echo $row['status'];
                                ?></p>
                        </div>
                        <br>


                        <?php
                    }

                    mysqli_close($conn);
                    ?>

                </div>

                <div>

                    <?php
                    //  session_start();

                /*    $hostname = "localhost";
                    $username = "root";
                    $db_password = "12345678";
                    $database = "ungineering";

                    $conn = mysqli_connect($hostname, $username, $db_password, $database);
                    if (!$conn) {
                        die("connection faild:" . mysqli_connect_error());
                    }
                    $name = $_SESSION['name'];
                    // $displayquery = "select pic from pic where name='$name' order by id desc  ";
                    $querydisplaying = mysqli_query($conn, $displayquery);

                    while ($result = mysqli_fetch_array($querydisplaying)) {
                        ?>
                        <img src="<?php echo $result[pic]; ?>" height="80px" width="80px;"  style="border-radius: 50%; "> 

                        <?php
                    } */
                    ?>  


                </div>

            </div>

        </div>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>
