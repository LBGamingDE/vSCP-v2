<?php
session_start();

if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($connect, $_POST['uid']);
    $pwd = mysqli_real_escape_string($connect, $_POST['pwd']);
    

    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../index.php?login=empty");
        exit();

    } else {
        $sql = "SELECT * FROM userdata WHERE user_uid ='$uid' OR user_email='$uid'";
        $result = mysqli_query($connect, $sql);
        $resultCheck = mysqli_num_rows($results);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)){
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false){
                    header("Location: ../index.php?login=error");
                    exit();

                }elseif ($hashedPwdCheck == true) {
                    //Log in the User here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    //$_SESSION['u_pwd'] = $row['user_pwd'];
                    header("Location: ../index.php?login=sucess");
                    exit();

                }  
            }
        }
    }

} else {
    //header("Location: ../index.php?login=error2");
    var_dump($uid);
    var_dump($pwd);
    exit();
}