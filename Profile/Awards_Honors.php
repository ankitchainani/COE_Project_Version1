<!DOCTYPE html>

<?php
include ("../functions.php");

if (!isset($_SESSION["user"]))
     die("You are not authenticated to view this page.Please <a href='index.php'>click here</a> to go to home page.");
?>


<html lang="en">
    <head>
        <title>User Profile- Awards and Honors</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Script for checking cookie present or not -->
        
    </head>
  <body>
        
       

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
                            <li><a href="../HomePage.php">Home</a></li>
                            <li><a href="../Profile/Personal.html">Personal Info</a></li>
                            <li><a href="../Profile/Awards and Honors.html">Education</a></li>
                            <li><a href="#">Awards and Honors</a></li>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    
    
    <div> <h2>Awards</h2>
               <?php      
               try {
                   
                   global $connection;
                   $query = "SELECT * FROM Award where ULID ='". $_SESSION['user']. "'";
                   $result = $connection->query($query);
                   $num = $result->num_rows;

                   for ($j = 0; $j < $num; ++$j) {
                       $row = $result->fetch_array(MYSQLI_ASSOC);
                     echo "<div>". $row['NAME']." <br> ".$row['ORG']." <br>". $row['DTM_DATE'] ."</div> <hr>";
                 
                       
                       
                   }
               } catch (Exception $e) {
                   echo $e->getMessage();
               }
             
        ?>
        
    </div>
            <div class="container">
                <div class="row" style="margin-top:40px">
                    <div class="col-sm-8">
                        <h2>You are currently viewing this profile as <b>Admin</b></h2>
                        <br/>
                        <form action="personal.php" method="post">
                            <br />
                        
                    
                            <div class="form-group row">
                                <label for="Award" class="col-sm-3 form-control-label" style="text-align: right;">Award or Honor Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="award" name="Award">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Organization" class="col-sm-3 form-control-label" style="text-align: right;">Organization</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="org" name="Org" placeholder="Name of Organization">
                                </div>
                            </div>
                             
                             <div class="form-group row">
                                <label for="year" class="col-sm-3 form-control-label" style="text-align: right;"> Year Received </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="year" name="year" placeholder="YYYY">
                                </div>
                            </div><br>
                                  </form>

                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </body>
</html>
