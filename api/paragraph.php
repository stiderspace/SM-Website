<?php
include "DB.php";


/**
  * Controls the paragraph table in the database
  * Only returns JSON
  */
class Paragraph {
  function getAll() {
      $query = "select * from paragraph";

      try {
        querydb($query);
      } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
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
    $query =  "select * from paragraph where id = " . $id;

    try {
      if(is_numeric($id))
        querydb($query);
      else
        throw new Exception("Only accepts numbers");
    } catch(Exception $e) {
      echo "Error: " . $e->getMessage();
    }
  }


  /**
    * Returns all paragraphs of a page
    * Only accepting numeric input
    * @param $id The id of a paragraph
    */
  function getByPageId($id) {
    global $conn;

    $query =  "select * from paragraph where page_id = " . $id;

    try {
      if(is_numeric($id))
        querydb($query);
      else
        throw new Exception("Only accepts numbers");
    } catch(Exception $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  /**
    * Creates a paragraph
    * @param $title Paragraph title
    * @param $body Paragraph text
    * @param $image_url Picture url
    * @param $type Paragraph type, required for the rendering
    * @param $position Returns position of paragraph
    * @param $page_id The page id of this paragraph
    */
  function create() {

  }
}
?>
