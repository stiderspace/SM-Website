<?php


/**
  * Database login info
  */
$dbserver_name = "localhost";
$dbusername = "socialmedia";
$dbpassword = "social_media_0/1";
$dbname = "social_media";

$conn = new mysqli($dbserver_name, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . $connection->connect_error);

/**
  * Database
  * Just a wrapper for a few functions to have meaningful function names
  * Haki Karer Taylan - www.vresh.nl
  * Social Media project
  */
class DB {
  /**
    * Sets return header and echo's JSON
    */
  function return_json($sqlresult) {
    header("Content-type:application/json;charset=utf-8");
    echo json_encode($sqlresult);
  }

  /**
    * Checks if its a valid ID, else returns a new one
    */
  function parse_id($id) {

  }

  /**
    * Queries the database with the given query - select only queries
    * Returns either a JSON result or throws an exception.
    */
  function select($sql) {
    global $conn;

    if($result = $conn->query($sql)) {
      while($row = mysqli_fetch_assoc($result))
        $result_rows[] = $row;

      if($result_rows != null)
        DB::return_json($result_rows);

      else
        throw new Exception("no results");
    } else
      throw new Exception("query failed");
  }

  /**
    * Inserts data from query - insert only queries
    * Returns true on succes else false
    */
  function insert($sql) {
    global $conn;

    if($conn->query($sql))
      return true;
    else
      throw new Exception("inserting data failed");
  }

  function delete($id, $table) {
    global $conn;

    if(is_numeric($id)) {
      $sql = "delete from " . $table . " where id = " . $id;
      if($conn->query($sql))
        return true;
      else
        throw new Exception("The {$table} doesn't exist");
    }
  }
}

?>
