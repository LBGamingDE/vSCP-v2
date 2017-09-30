<?php

$serviceon = 1;
$adminlogin = $_GET["admin"];

if ($serviceon == 1){
    if ($adminlogin == "true"){
        header("Location: module/admin/View/admin_login.php");
    } else {
        header("Location: module/user/View/user_login.php"); 
    }

} else { 
    header('HTTP/1.1 500 Internal Server Error');
}
