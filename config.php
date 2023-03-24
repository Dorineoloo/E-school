<?php
session_start();

//connect to database
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "portal");
$mysqli;
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Connection failed: ");
     // . $conn->connect_error);
?>