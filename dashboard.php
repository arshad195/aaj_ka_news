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
                        <h1 class="text-left slam "> Aslamo Alykum </h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div> <!-- end of container_fluid -->


        <!-- 2nd head -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 news">
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
                                <li class="active"><a href="dashboard.php">user</a></li>
                                <!--<li><a href="signin.php">signin</a></li>
                                <li><a href="signup.php">signup</a></li> -->
                                <li class="text-danger"><a href="logout.php">logout</a></li>
                            </ul>
                        </div> <!-- end of navbar collapse -->
                    </nav>

                </div>
            </div>  <!-- end of row -->
        </div>  <!-- end of container -->
        <br><br><br>

        <div class="container" style="border: 1px #28a745 solid; padding: 20px; border-radius: 20px; box-shadow: 5px 4px 8px 5px #34ce57;">
            <div class="row">
                <div class="col-sm-4">

                    <?php
                    //  session_start();

                    $hostname = "localhost";
                    $username = "root";
                    $db_password = "12345678";
                    $database = "ungineering";

                    $conn = mysqli_connect($hostname, $username, $db_password, $database);
                    if (!$conn) {
                        die("connection faild:" . mysqli_connect_error());
                    }
                    $name = $_SESSION['name'];
                    //$img = "insert into pic (pic) values('$distinationfile')";
                    // $query = mysqli_query($conn, $img);
                    $displayquery = "select pic from pic where name='$name' order by id desc limit 1 ";
                    $querydisplaying = mysqli_query($conn, $displayquery);

                    while ($result = mysqli_fetch_array($querydisplaying)) {
                        //  echo $result[pic];
                        ?>
                        <!-- <div style="width:200px; height: 200px; border: 1px #c69500 solid; border-radius: 50px;"> -->
                        <img src="<?php echo $result[pic]; ?>" height="200px" width="200px;"  >
                        <!--</div> -->
                        <?php
                    }
                    ?>

                    <!-- <div style="border: 1px solid #117a8b; height: 200px; width: 400px;">
                         
                     </div> -->
                    <form method="POST" action="dashboard_submit.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file"> profile pic:</label>
                            <input type="file" name="file" class="form-control">
                            <input type="submit" value="upload" name="submit" class="btn btn-danger">
                        </div> 

                    </form>

                </div>
                <div class="col-sm-6 text-left" style="font-size: 30px;">

                    name: md arshad rashid <br>
                    collage: jadavpur university , kolkata <br>
                    home : hajipur (bihar) <br>
                    live's in:kolkata

                </div>

            </div>

        </div> 
        <!-- end of profile section -->
        <br><br>
        <!-- uploaded section-->
        <h2 class="text-center text-success">your uploaded news</h2>
        <div class="container">
            <div class="row">
                <div class="col apna_news_section">


                    <?php
                    $hostname = "localhost";
                    $username = "root";
                    $db_password = "12345678";
                    $database = "ungineering";

                    $conn = mysqli_connect($hostname, $username, $db_password, $database);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $name = $_SESSION['name'];

                    $q = "select * from status where name='$name' order by id desc ";

                    $result = mysqli_query($conn, $q);
                    if (!$result) {
                        die(mysqli_error($conn));
                    }
                    while ($row = mysqli_fetch_array($result)) {
                        ?>


                       

                            -<p>
                                <?php
                                echo $row['status'];
                                ?></p>
                        
                        <br>


                        <?php
                    }

                    mysqli_close($conn);
                    ?>



                </div>

            </div>
        </div>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </body>
</html>
