<?php
/**
  * API of the backend - Part of the router index.php
  *
  * Haki Karer Taylan - www.vresh.nl
  * Social Media project
  */

/**
  * Get all business logic
  */
include "paragraph.php";
// include "media.php";
// include "werkstuk.php";
// include "student.php";
// include "pagina.php";


/**
  * @param $m The method either get or post
  * @param $t The table name
  * @param $a Action type, can be create/update/get/delete
  * @param $i Id, can be new/a numeric representing an id/all
  */
function url($m, $t, $a, $i) {
  if($_SERVER["REQUEST_METHOD"] === $m) {
    if($_POST["t"] === $t) {
      if($_POST["a"] === $a) {
        if($_POST["i"] === $i) {
          return true;
        }
      }
    }
  } else
    return false;
}

/**
  * Creates paragraph
  * /api/paragraph/create
  */
if(url("POST", "paragraph", "create", "new")) {
  return Paragraph::create();
}

/**
  * Gets all paragraphs
  * /api/paragraph/all
  */
if(url("GET", "paragraph", "get", "all")) {
  return Paragraph::getAll();
}

/**
  * Get paragraph by id
  * /api/paragraph/id/$id
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraph/"]))
    return Paragraph::getById($_GET["paragraph/id/"]);
}

/**
  * Get paragraph by page id
  * /api/paragraph/pageid/$id
  * return json paragraph
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraph/page/id"]))
    return Paragraph::getByPageId($_GET["paragraph/page/id/"]);
}

/**
  * Updates paragraph with corresponding $id
  */
if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_GET["paragraph/"]))
    return Paragraph::update($_GET["paragraph/id/"]);
}

/**
  * Deletes paragraph with corresponding $id
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraph/delete/"]))
    return Paragraph::delete($_GET["paragraph/delete/"]);
}

?>
