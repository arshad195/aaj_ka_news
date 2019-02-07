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

        <!-- signin form -->
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-success text-left">Login Form</h2>
                </div>
            </div>
            <br>

            <div class="container">
                <div class="row">
                    <form method="POST" action="signin_submit.php" id="signin_form">
                        <div class="form-group">
                            <label>USERNAME</label>
                            <input type="text" class="form-control" placeholder="name" name="name"/>
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label> 
                            <input type="email" class="form-control" placeholder="email" name="email"/>
                        </div>

                        <div class="form-group"> 
                            <label>PASSWORD</label>
                            <input type="password" class="form-control" placeholder="password" name="password"/>
                        </div>

                        <br/>
                        <div class="form-group">
                            <button type="submit" class="btn-lg btn-success">signin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>