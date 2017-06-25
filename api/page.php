<?php



/**
  * Controls the paragraph table in the database
  * Only returns JSON
  */
class Page {
  /**
    * Returns single page
    * Only accepting numeric input
    * @param $id The primary key of a page
    * @return Returns JSON notation of a page
    */
  function getById($id) {
    global $conn;
    $sql =  "select * from paragraph where id = " . $id;

    try {
      if(is_numeric($id))
        DB::select($sql);
      else
        throw new Exception("Only accepts numbers");
    } catch(Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }

  /**
    * Updates the paragraph
    * @param $id The paragraph id
    */
  function update($id) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $image_url = $_POST["image_url"];

    $sql = "insert into paragraph(id, name, image_url)
    values ({$id}, \"{$name}\", \"{$image_url}\");"; // Moet update tatement zijn

    // Returns succes string or fail for javascript to use for refreshing the form
    try {
      DB::insert($sql);
      echo "succes";
    } catch(Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }

}
?>
