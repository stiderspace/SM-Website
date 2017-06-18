<?php

/*
  Database connection + functions
*/
$dbserver_name = "localhost";
$dbusername = "socialmedia";
$dbpassword = "social_media_0/1";
$dbname = "social_media";

$conn = new mysqli($dbserver_name, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . $connection->connect_error);

?>
