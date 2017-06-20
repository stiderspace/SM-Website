<?php
/**
  * API of the backend
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
  * Router - api
  */

if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["all"]))
    return Paragraph::getAll();
}

/**
  * Get paragraph by id
  * /api/db.php?paragraphid=$id
  * /api/paragraph/id/
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraphid"]))
    return Paragraph::getById($_GET["paragraphid"]);
}

/**
  * Get paragraph by page id
  * /api/db.php?paragraphpageid=$id
  * /api/paragraph/pageid/
  * return json paragraph
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraphpageid"]))
    return Paragraph::getByPageId($_GET["paragraphpageid"]);
}

?>
fuck
