<?php
// DB data [lb ; 29.09.2017]
$sql_server = 'localhost';
$sql_user = 'root';
$sql_password = '';
$sql_dbname = '';

// Connect to db [lb ; 29.09.2017]
try {
    $db   = new PDO($sql_server, $sql_user, $sql_password);
    // Catch db erorr  [lb ; 29.09.2017]
} catch (PDOExpection $e) {
    echo 'Connection faild:' . $e->getMessage();
}
