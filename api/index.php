<?php

/**
  * Get all business logic
  */
include 'paragraph.php';
// include 'media.php';
// include 'werkstuk.php';
// include 'student.php';
// include 'pagina.php';


/**
  * Router - api
  */

/**
  * Get paragraph by id
  * /api/db.php?paragraphid=$id
  * /api/paragraphid/$id
  */
if($_SERVER['REQUEST_METHOD'] == "GET") {
  if(isset($_GET['paragraphid'])) {
    return getParagraphById($_GET['paragraphid']);
  }
}

/**
  * Get paragraph by page id
  * /api/db.php?paragraphpageid=$id
  * /api/paragraphpageid/$id
  * return json paragraph
  */
if($_SERVER['REQUEST_METHOD'] == "GET") {
  if(isset($_GET['paragraphpageid'])) {
    return getParagraphsByPageId($_GET['paragraphpageid']);
  }
}

?>
fuck
