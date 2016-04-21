<!DOCTYPE html>
<?php
// no need of session here, otherwise error on start page.
?>
<html lang = "en">
    <head>
        <title>COE Project</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {

                //show the login modal on click of login button
                $('#login').click(function () {
                    $('#modal-login').modal('show');
                });
                //functionality of login form on submission
                $("#loginform").submit(function () {
                    var vname = $('#ulid').val();
                    var vpassword = $('#password').val();
                    var sendInfo = {
                        phpusername: vname,
                        phppassword: vpassword
                    };
                    $.ajax({
                        type: "POST",
                        url: "authenticate.php",
                        dataType: "json",
                        success: function (msg) {
                            if (msg.success == 1) {
                                $('#logerror').css({"color": "green"});
                                $('#logerror').html(msg.message);
                                $('#modal-login').fadeOut(1000, function () {
                                    document.location = "index.php"; //redirect
                                });
                            } else {
                                $('#logerror').html(msg.message);
                            }
                        },
                        data: sendInfo
                    });
                   
                    return false;
                });
            });
        </script>

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
                        <ul class="nav navbar-nav navbar-right">
                            <li id="login">
                                <a><span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Start: login modal -->
                    <div class="modal fade" id="modal-login">
                        <div class="modal-dialog" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>

                                    <h4 class="modal-title">User Login Window</h4>
                                </div><!-- end modal-header -->
                                <div class="modal-body">
                                    <form class="form-horizontal" id="loginform">

                                        <div style="color:red" id="logerror"></div>
                                        <br/>

                                        <div class="form-group">
                                            <div class="col-lg-10">
                                                <label for="ulid">UID</label>
                                                <input class="form-control" required="true" id="ulid" placeholder="Enter you ISU UID" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-10">
                                                <label for="password">Password</label>
                                                <input class="form-control" required="true" id="password" placeholder="Password" type="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-10">
                                                <input type="checkbox" id="remember">  Remember
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-10">
                                                <button class="btn" type="submit" id="btn-submit-login" >Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end modal-body -->

                               
                            </div><!-- end modal-content -->
                        </div><!-- end modal-dialog -->
                    </div><!-- end myModal -->

                </div>
            </nav>
            <div class="container">
                <div class="row" style="margin-top:40px">
                    <div class="col-sm-12">
                        <br /><br /><br /> <h2> Welcome to COE Digital Measures Home Page.  </h2><br /><br />
                        <h2 id="homeText">Click Login on the top right corner to login and access the application.</h2>
                        <div> &nbsp; </div>
                    </div> <!-- End col -->
                </div>	<!-- end row -->
            </div>

        </div><!-- end container-fluid -->
<!--        
       footer start -->

<div id="footer">
      <div class="container">
        <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
      </div>
</div>
    </body>
</html>
