<?php
/**
  * Database object
  * Database connection + functions
  *
  * Haki Karer Taylan - www.vresh.nl
  * Social Media project
  */

$dbserver_name = "localhost";
$dbusername = "socialmedia";
$dbpassword = "social_media_0/1";
$dbname = "social_media";

$conn = new mysqli($dbserver_name, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . $connection->connect_error);

/**
  * Sets return header and echo's JSON
  */
function jsonreturner($queryresult) {
  header("Content-type:application/json;charset=utf-8");
  echo json_encode($queryresult);
}

/**
  * Queries the database with the given query
  * Returns either a JSON result or throws an exception.
  */
function db_select($query) {
  global $conn;

  if($result = $conn->query($query)) {
    while($row = mysqli_fetch_assoc($result))
      $result_rows[] = $row;

    if($result_rows != null)
      jsonreturner($result_rows);

    else
      throw new Exception("no results");
  } else
    throw new Exception("query failed");
}

/**
  * Inserts data from query
  * Returns true on succes else false
  */
function db_insert($query) {
  global $conn;

  if($conn->query($query))
    return true;
  else
    throw new Exception("inserting data failed");
}
?>
