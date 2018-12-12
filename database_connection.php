<?php 

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=medical", "root", "");

$connect->exec("SET CHARACTER SET UTF8");

session_start();


?>
