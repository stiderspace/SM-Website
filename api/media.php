<?php


/**
  * Controls the media table in the database
  * Only returns JSON
  */
class Media {

  function create() {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $image_url = $_POST["image_url"];
    $url = $_POST["url"];
    $url_title = $_POST["url_title"];
    $page_id = $_POST["page_id"];

    $sql = "insert into media(title, description, image_url, url, url_title, page_id)
    values (\"{$title}\", \"{$description}\", \"{$image_url}\", {$url}, {$url_title}, {$page_id});";

    // Returns succes string or fail for javascript to use for refreshing the form
    try {
      DB::insert($sql);
      echo "succes";
    } catch(Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }



  /**
    * @return Returns all rows in JSON
    */
  function getAll() {
      DB::getAll("media");
  }

  /**
    * Only accepting numeric input
    * @param $id The primary key of a media
    * @return Returns single media in JSON
    */
  function getById($id) {
    DB::getById($id, "media");
  }


  /**
    * Returns all media of a page
    * Only accepting numeric input
    * @param $id The id of a media
    */
  function getByPageId($id) {
    global $conn;
    $sql =  "select * from media where page_id = " . $id;

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
    * Updates the media
    * @param $id The media id
    */
  function update($id) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $image_url = $_POST["image_url"];
    $url = $_POST["url"];
    $url_title = $_POST["url_title"];
    $page_id = $_POST["page_id"];

    $sql = "set title = {$title}, description = {$description}, image_url = {$image_url}, url = {$url}, url_title = {$url_title}, page_id = {$page_id}
            where id = {$id}";

    DB::update("media", $sql);
  }

  function delete($id) {
    try {
      DB::delete($id, "media");
    } catch(Exception $e) {
      echo "Error {$e->getMessage()}";
    }
  }
}
?>
