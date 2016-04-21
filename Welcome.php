<!DOCTYPE html>

<html lang = "en">
    <head>
        <title>Home Page</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container-fluid">
            <!--navigation menu -->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">COE Digital Measures</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                           <li><a href="../COE_Project/Personal.html">Personal Info</a></li>
                            <li><a href="../COE_Project/customer_view.php">Education</a></li>
                            <li><a href="../COE_Project_Version1/Profile/Awards_Honors.php">Awards and Honors</a></li>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li id="logout"> 
                                <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row" style="margin-top:40px">
                    <div class="col-sm-12">
                        <h2 id="homeText">Welcome to the Blank Screen!
                            If you are seeing this window, that means session is working perfectly fine.
                        You are logged in.</h2>
                        <div> &nbsp; </div><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <br /><br /><br />
                        <h2>Thank you!!</h2>
                    </div> <!-- End col -->
                </div>	<!-- end row -->
            </div>

        </div><!-- end container-fluid -->
    </body>
</html>

