<?php
// DB data [lb ; 29.09.2017]
$sql_server = 'mysql:dbname=multiusers;host=127.0.0.1';
$sql_user = 'root';
$sql_password = '';

    // Connect to db [lb ; 29.09.2017]
try {
    $db   = new PDO ($sql_server, $sql_user, $sql_password);
// Catch db erorr  [lb ; 29.09.2017]
} catch (PDOExpection $e) {
    die("Connection failed: " . $e->getMessage());
}