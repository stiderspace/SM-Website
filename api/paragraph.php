<?php
include "DB.php";


/**
  * Controls the paragraph table in the database
  * Only returns JSON
  */
class Paragraph {

  /**
    * Returns a bool, true or false
    */
  function create() {
    $id = 13; // ????
    $title = $_POST["title"];
    $body = $_POST["body"];
    $image_url = $_POST["image_url"];
    $type = $_POST["type"];
    $position = $_POST["position"];
    $page_id = $_POST["page_id"];

    $sql = "insert into paragraph(id, title, body, image_url, type, position, page_id)
    values ({$id}, \"{$title}\", \"{$body}\", \"{$image_url}\", {$type}, {$position}, {$page_id});";

    // Returns succes string or fail for javascript to use for refreshing the form
    try {
      DB::insert($sql);
      echo "succes";
    } catch(Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }



  /**
    * Returns all rows from paragraph
    */
  function getAll() {
      $sql = "select * from paragraph";

      try {
        DB::select($sql);
      } catch(Exception $e) {
        echo "Error: {$e->getMessage()}";
      }

  }

  /**
    * Returns single paragraph
    * Only accepting numeric input
    * @param $id The primary key of a paragraph
    * @return json Returns JSON notation of a paragraph
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
    $id = $_POST["id"];
    $title = $_POST["title"];
    $body = $_POST["body"];
    $image_url = $_POST["image_url"];
    $type = $_POST["type"];
    $position = $_POST["position"];
    $page_id = $_POST["page_id"];

    $sql = "insert into paragraph(id, title, body, image_url, type, position, page_id)
    values ({$id}, \"{$title}\", \"{$body}\", \"{$image_url}\", {$type}, {$position}, {$page_id});"; // Moet update tatement zijn

    // Returns succes string or fail for javascript to use for refreshing the form
    try {
      DB::insert($sql);
      echo "succes";
    } catch(Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }

  function delete($id) {
    try {
      DB::delete($id, "paragraph");
    } catch(Exception $e) {
      echo "Error {$e->getMessage()}";
    }
  }
}
?>
