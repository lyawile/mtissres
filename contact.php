<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <title>Welcome to Mtwara Islamic Secondary School</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--        <nav class="navbar-inverse navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Materials <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Quran</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Chemistry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>-->
        <?php include './includes/nav.php'; ?>
        <div class="jumbotron no-margin no-padding" style="margin-top: 0px;background-color: #eee;" >
            <div class="col-md-4 col-md-offset-2 map">
                <div class="map">
                    <h3>Contact Information </h3>
                    <div class="row">
                        <div class="col-md-2">
                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="font-size: 30px;"></span>
                        </div>
                        <div class="col-md-10">
                            <span>Mmingano Street</span>
                            <span>Mtwara Municipality,</span>
                            <span>Tanzania</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true" style="font-size: 30px;"></span>
                        </div>
                        <div class="col-md-10">

                            <span> Head Master:	89800990990</span>
                            <span>Second Master:	80800990990</span>
                            <span>Academic Master:	89800990990</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size: 30px;"></span>
                        </div>
                        <div class="col-md-10">
                            <span> Head master:	headmaster@mtiss.ac.tz</span>
                            <span>Second master:	headmaster@mtiss.ac.tz</span>
                            <span>Academic master:	headmaster@mtiss.ac.tz</span>

                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 col-md-offset-0 contact_form">
                <form action="" method="">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default" id="submit" value="send email" />
                    </div>

                </form>
            </div>
        </div>
        <div class="navbar navbar-inverse navbar-default navbar-fixed-bottom footer" style="color: #cbcbcb" style="border-radius: 0;">
            <h5 class="no-margin no-padding">&copy; Mtwara Islamic Secondary School, 2016</h5>
        </div>
        <?php // include './includes/footer.php'; ?>
        <script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // $('body').css("background","red");
            });
        </script>
    </body>
</html>
