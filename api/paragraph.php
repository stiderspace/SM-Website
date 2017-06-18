<?php

include 'DB.php';

function jsonreturner($queryresult) {
  header('Content-type:application/json;charset=utf-8');
  echo json_encode($queryresult);
}

/**
  * Returns single paragraph
  * Only accepting numeric input
  * @param $id The primary key of a paragraph
  * @return json Returns JSON notation of a paragraph
  */
function getParagraphById($id) {
  global $conn;

  if(is_numeric($id)) {
    $query =  "select * from paragraph " .
              "where id is " . $id;

    try {
      $arr = array('a' => 1, 'b' => 2);
      /* $result = $conn->query($query); */
      jsonreturner($arr);
    } catch(Exception $e) {
      echo $id . "not found";
    }
  } else {
    echo "fuckoffcheater";
  }
}


/**
  * Returns all paragraphs of a page
  * Only accepting numeric input
  * @param $id The id of a paragraph
  */
function getParagraphsByPageId($id) {
  global $conn;

  if(is_numeric($id)) {
    $query =  "select * from paragraph " .
              "where pageid is " . $id;

    try {
      $result = $conn->query($query);
      echo "ditisparagraphsbypageid";

    } catch(Exception $e) {
      return "No results for this page";
    }
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
function createParagraph() {

}


?>
