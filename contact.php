<!DOCTYPE html>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.5003656709755!2d40.185860725733924!3d-10.301781538317735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd81ac52c9d4407cc!2sMtwara+Islamic+Secondary+School!5e0!3m2!1sen!2sus!4v1521523869633" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-0">
                <div class="map" style="padding: 0px;">
                    <h2>Contact Information </h2>
                    <div class="row">
                        <div class="col-md-11">
                            <h3>Address</h3>
                            <span>Mtwara Islamic Secondary School</span>
                            <span>P.O.Box 261 </span>
                            <span>Mtwara Municipality</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <h3>Phones</h3>
                            <span> Head Master:	89800990990</span>
                            <span>Second Master:	80800990990</span>
                            <span>Academic Master:	89800990990</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <h3>Emails</h3>
                            <span>Head master:	headmaster@mtiss.ac.tz</span>
                            <span>Second master: headmaster@mtiss.ac.tz</span>
                            <span>Academic master: headmaster@mtiss.ac.tz</span>

                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md-8 col-md-offset-0 contact_form" style="padding-top: 0px;">
                <h2 class="h">Write to Us</h2>
                <form action="" method="" style="padding-top: 0px;">
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
//                 $('body').css("background","red");
            });
        </script>
    </body>
</html>
