<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </head>
  <body>
    <p><br/><br/><br/></p>
    <div class="container" >
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php
                        include "config.php";
                            if (isset($_POST['user_name']) && isset($_POST['user_password'])){
                                $user_name = $_POST['user_name'];
                                $user_password = md5($_POST['user_password']);
                                $stmt = $db->prepare("SELECT * FROM users WHERE user_name=? AND user_password=? ");
                                $stmt->bindParm(1, $user_name);
                                $stmt->bindParm(2, $user_password);
                                $stmt->execute();
                                $row = $stmt->fetch_assoc();
                                $user = $row['user_name'];
                                $pass = $row['user_password'];
                                $id = $row['id'];
                                $type = $row['type'];
                                if ($user_name==$user && $pass==$user_password){
                                    session_start();
                                    $_SESSION['user_name'] = $user;
                                    $_SESSION['user_password'] = $pass;
                                    $_SESSION['id'] = $id;
                                    $_SESSION['user_type'] = $type;
                                    ?>
                                    <script>window.location.href='index.php'</script>
                                    <?php
                                } else {
                                    ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                        </div>
                                        
                                    <?php
                                }
                            }
                        ?>

                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Username</label><br/>
                                <input type="text" class="form-control" name="user_name"/>
                            </div>
                            <div class="form-group">
                                <lable>Password</lable><br/>
                                <input type="password" class="form-control" name="user_password"/> 
                            </div>
                                <input type="submit" value="[login]" class="btn btn-primary"/> 
                        </form>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>   

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>