<?php

$serviceon = 1;

if ($serviceon == 1){
    header("Location: user/user_login.php");
} else { 
    header('HTTP/1.1 500 Internal Server Error');
}
