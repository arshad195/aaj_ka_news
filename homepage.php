

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
                <div class="col-md-4  news">
                    <img src="pic/news.png" class="news_pic" >
                </div> 
                <div class="col-md-8 my_menu">

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
                                <li class="active"><a href="homepage.php">home</a></li>
                                <li><a href="dashboard.php">user</a></li>

                                <?php
                                session_start();
                                if (!isset($_SESSION['name'])) {
                                    //header('location:signin.php');
                                    ?>

                                    <li><a href="signin.php">signin</a></li>
                                    <li><a href="signup.php">signup</a></li>

                                <?php } ?>
                                <li class="text-danger"><a href="logout.php">logout</a></li>
                            </ul>
                        </div> <!-- end of navbar collapse -->
                    </nav>

                </div>
            </div>  <!-- end of row -->
        </div>  <!-- end of container -->
        <br><br>
        
        <!-- user name and pic -->

        <?php
        session_start();
        if (isset($_SESSION['name'])) {
            //header('location:signin.php');
            ?>


            <div class="container" style=" background:radial-gradient(circle ,seagreen, limegreen); border-radius: 30px; box-shadow: 4px 5px 6px 7px green ; ">
                <div class="row">
                    <div class="col-xs-6 col-md-4">

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
                        $displayquery = "select pic from pic where name='$name' order by id desc limit 1 ";
                        $querydisplaying = mysqli_query($conn, $displayquery);

                        while ($result = mysqli_fetch_array($querydisplaying)) {
                            ?>
                            <img src="<?php echo $result[pic]; ?>" height="130px" width="150px;"  style="border-radius: 50%; ">

                            <?php
                        }
                        ?>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <h2 style="color:red;"> WELCOME !</h2>
                        <b> <h3 class="text-left" style="color:whitesmoke; font-size: 30px;"> <?php echo $_SESSION['name']; ?></h3> </b>

                    </div>

                </div>

            </div> <!-- end of container -->
            <?php
        }
        ?>
        <br>
        <!-- upload news -->

        <div class="container" style="background: yellow;">
            <div class="row" style=" background: whitesmoke"> 
                <div class="col-xs-12 text-right" style= background: orange; ">
                     <a href="upload_news.php"><button  type="button" class=" btn btn-success ">UPLOAD NEWS</button></a>

                </div> 
            </div>
        </div>
        <br>
        <!-- news section -->
        <div class="container">
            <div class="row " style="margin-top:20px;padding-right: 20px; ">
                <div class="col-xs-12 col-md-4 text-right  top_news">
                    <h3 class="text-left text-danger">top news channel</h3>
                    <select onchange="location = this.value;"  style="width:100%; height:30px; border: 2px #28a745 solid; background: limegreen; border-radius: 20px;">
                        <option value="https://timesofindia.indiatimes.com">TIMES OF INDIA</option>
                        <option value="https://www.hindustantimes.com">HINDUSTAN TIME</option>
                        <option value="https://www.thehindu.com">THE HINDU </option>
                        <option value="https://abpnews.abplive.in">ABP NEWS</option>
                        <option value="http://www.newsonair.com">ALL INDIA NEWS</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-8 text-center update_news_section" style="">
                    <h1 class="text-center text-alert">TODAY'S TOP NEWS</h1>
                    <hr width="50%" color="red">
                    <p>
                        1. The death of more than 100 people to toxic alcohol in Uttar Pradesh and Uttarakhand has exposed the thriving sale of illicit liquor in the region. India remains among the countries with a high number of alcohol-related deaths, with poor governance, corruption and distorted policies contributing to such periodic tragedies. The governments in U.P. and Uttarakhand cannot evade responsibility for the death of so many people, the majority of them in Saharanpur district of U.P. Preliminary investigation has confirmed the well-entrenched system of illicit liquor 
                        <br><br>

                        2. The death of more than 100 people to toxic alcohol in Uttar Pradesh and Uttarakhand has exposed the thriving sale of illicit liquor in the region. India remains among the countries with a high number of alcohol-related deaths, with poor governance, corruption and distorted policies contributing to such periodic tragedies. The governments in U.P. and Uttarakhand cannot evade responsibility for the death of so many people, the majority of them in Saharanpur district of U.P. Preliminary investigation has confirmed the well-entrenched system of illicit liquor 

                        <br><br>
                        3. The death of more than 100 people to toxic alcohol in Uttar Pradesh and Uttarakhand has exposed the thriving sale of illicit liquor in the region. India remains among the countries with a high number of alcohol-related deaths, with poor governance, corruption and distorted policies contributing to such periodic tragedies. The governments in U.P. and Uttarakhand cannot evade responsibility for the death of so many people, the majority of them in Saharanpur district of U.P. Preliminary investigation has confirmed the well-entrenched system of illicit liquor  
                    </p>
                </div>
            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

    </body>
</html>
