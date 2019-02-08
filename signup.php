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

        <!-- signup form -->
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-success text-left">Register Form</h2>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <form method="POST" action="signup_submit.php" id="signup_form">
                        <div class="form-group">
                            <label> NAME </label>  
                            <input type="text" class="form-control   " name="name" id="name" placeholder="fill name" required>
                            <span style="color:red;"></span>
                        </div>

                        <div class="form-group">
                            <label> EMAIL  </label> 
                            <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                            <span style="color:red;"></span>
                        </div>

                        <div class="form-group">
                            <label>PASSWORD</label>  
                            <input type="password" class="form-control" name="password" id="pass" placeholder="password" required>
                        </div>

                        <div class="form-group">
                            <label>CONFIRM_PASSWORD</label>
                            <input type="password" class="form-control" name="password" id="cpass" placeholder="c password"/>
                        </div>
                        <span id="check" style="color:red"></span>
                        <br/><br/>
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn-lg btn-success">submit</button>
                        </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
