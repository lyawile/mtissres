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
        <?php include './includes/nav.php'; ?>
        <div class="col-md-10 col-md-offset-1 no-padding" style="margin-top: 0px;" >
            <div class="col-md-12" >
                <div class="col-md-12  location no-margin no-padding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3925.513093659882!2d40.18830983238677!3d-10.300759414712404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1463559649760" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-0">
                <div class="map">
                    <h3>Contact Information </h3>
                    <div class="row">
                        <div class="col-md-1">
                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="font-size: 30px;"></span>
                        </div>
                        <div class="col-md-11">
                            <span>Mmingano Street</span>
                            <span>Mtwara Municipality,</span>
                            <span>Tanzania</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true" style="font-size: 30px;"></span>
                        </div>
                        <div class="col-md-11">

                            <span> Head Master:	89800990990</span>
                            <span>Second Master:	80800990990</span>
                            <span>Academic Master:	89800990990</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size: 30px;"></span>
                        </div>
                        <div class="col-md-11">
                            <span> Head master:	headmaster@mtiss.ac.tz</span>
                            <span>Second master:	headmaster@mtiss.ac.tz</span>
                            <span>Academic master:	headmaster@mtiss.ac.tz</span>

                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md-8 col-md-offset-0 contact_form" >
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
                        <label for="message">Message</label>
                        <textarea rows="10" class="form-control" id="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default" id="submit" value="send email" />
                    </div>
                </form>
            </div>
        </div>
        <?php include './includes/footer.php'; ?>
        <script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // $('body').css("background","red");
            });
        </script>
    </body>
</html>
