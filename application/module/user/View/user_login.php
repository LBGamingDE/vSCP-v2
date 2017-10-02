<?php
include '../../../db/db.config.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> vSCP | Dashboard</title>
        <!-- Bootstrap CDN [lb ; 30.09.2017] -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Custom stylsheet [lb ; 30.09.2017] -->
        <link rel="stylesheet" href="../../../css/loginpage.css">

    </head>
    <body>
        <hgroup>
            <h1>vSCP Login</h1>
            <h3>........</h3>
        </hgroup>
        <?php
            include '../../../include/user_validate.inc.php';
        ?>
        <form>
            <div class="group">
                <input type="text" name="user_loginname" methode="POST">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nutzername oder Email</label>
            </div>
            <div class="group">
                <input type="password" methode="POST" name="user_password"> 
                    <span class="highlight"></span>
                    <span class="bar"></span>
                <label>Password</label>
            </div>
                <button type="submit" class="button buttonBlue" name="user_Login" action="auth.php">
                    Login
                </div>
                </button>
        </form>



        <!-- <div class='container' >
            <div class='row'>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </div>
        </div>
        <div>Hello World</div> -->


        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>