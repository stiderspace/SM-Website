<?php
/*
  Database connection + functions
*/
$server_name = "localhost";
$username = "username";
$password = "password";

$connection = new mysqli($server_name, $username, $password) or die("Connection failed: " . $connection->connect_error);;


/**
  * Get all business logic
  */
include 'alinea.php';
include 'media.php';
include 'werkstuk.php';
include 'student.php';
include 'pagina.php';


/**
  * Router - api
  */

/**
  * /api/alineaid/$id
  */
if($_GET['alineaid']) {
  return getAlineaById($_GET['alineaid']);
}

/**
  * /api/alineapageid/$id
  */
if($_GET['alineapageid']) {
  return getAlineasByPageId($_GET['alineapageid']);
}





?>
