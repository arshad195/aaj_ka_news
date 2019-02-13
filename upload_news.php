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
                <form method="POST" action="upload_news.php" id="upload">
                    <div class="form-group">
                        <label>NEWS</label>
                        <textarea class="form-control" rows="5" id="comment" name="news" placeholder="type news"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn-lg btn-success">upload</button>
                    </div>
                </form>
            </div>
        </div>  <!-- end of container -->
        <!-- end of upload section -->
        <br>

        <!-- start show_news_section -->
        <h2 class="text-danger text-center">user's uploaded news</h2>

        <div class="container">
            <div class="row" style="border: 1px #28a745 solid; border-radius: 20px;">
                <div class="col-xs-3 ">
                    
                    ioirho
                </div>
                <div class="col-xs-9 text-left">
                    
                    ijfijrg
                </div>
                
            </div>
            
        </div>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>