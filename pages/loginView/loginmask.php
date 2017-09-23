<!DOCTYPE HTML>

<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        header("Location: sucess.php");
        
    }
?>


<html>
    <body>
        <form method="post" action="loginmask.php">
            Username:<br/>
            <input type="text" name"username"><br/>
            Password<br/>
            <input type="password" name="password"><br/>
            <input type="submit" value="Login">
        </form>
    </body>
</html>