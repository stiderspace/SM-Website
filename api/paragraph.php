<?php


/**
  * Controls the paragraph table in the database
  * Only returns JSON
  */
class Paragraph {

  /**
    * Returns a bool, true or false
    */
  function create() {
    $title = $_POST["title"];
    $body = $_POST["body"];
    $image_url = $_POST["image_url"];
    $type = $_POST["type"];
    $position = $_POST["position"];
    $page_id = $_POST["page_id"];

    $sql = "insert into paragraph(id, title, body, image_url, type, position, page_id)
    values (\"{$title}\", \"{$body}\", \"{$image_url}\", {$type}, {$position}, {$page_id});";

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
      DB::getAll("paragraph");
  }

  /**
    * Only accepting numeric input
    * @param $id The primary key of a paragraph
    * @return Returns single paragraph in JSON
    */
  function getById($id) {
    DB::getById($id, "paragraph");
  }


  /**
    * Returns all paragraphs of a page
    * Only accepting numeric input
    * @param $id The id of a paragraph
    */
  function getByPageId($id) {
    global $conn;
    $sql =  "select * from paragraph where page_id = " . $id;

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
    $title = $_POST["title"];
    $body = $_POST["body"];
    $image_url = $_FILES["image_url"]["name"];
    $type = $_POST["type"];
    $page_id = $_POST["page_id"];

    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image_url"]["name"]);

    move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file);

    $sql = "set title = \"{$title}\", body = \"{$body}\", image_url = \"{$image_url}\", type = \"{$type}\", page_id = \"{$page_id}\"
            where id = {$id}";

    DB::update("paragraph", $sql, "../admin/?p=paragraphs&a=edit&i=" . $id);
  }

  function delete($id) {
    try {
      DB::delete($id, "paragraph", "../admin/?p=paragraphs&a=list");
    } catch(Exception $e) {
      echo "Error {$e->getMessage()}";
    }
  }
}
?>
