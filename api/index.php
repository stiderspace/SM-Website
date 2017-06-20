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
  * All functions from the models are returned to stop the script where the returned function ends.
  */

/**
  * TYPE: POST
  * Creates paragraph
  * /api/?create
  */
if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_GET["create"]))
    return Paragraph::create();
}

/**
  * TYPE: GET
  * Gets all paragraphs
  * /api/?all
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["all"]))
    return Paragraph::getAll();
}

/**
  * TYPE: GET
  * Get paragraph by id
  * /api/?paragraphid=$id
  * /api/paragraph/id/$id
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraphid"]))
    return Paragraph::getById($_GET["paragraphid"]);
}

/**
  * TYPE: GET
  * Get paragraph by page id
  * /api/?paragraphpageid=$id
  * /api/paragraph/pageid/$id
  * return json paragraph
  */
if($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["paragraphpageid"]))
    return Paragraph::getByPageId($_GET["paragraphpageid"]);
}

?>


<form action="index.php?create" method="post">
  <input type="number" name="id" hidden="" />
  <input type="text" name="title" />
  <input type="textarea" name="body" />
  <input type="text" name="image-url" />
  <input type="number" name="type" />
  <input type="number" name="position" />
  <input type="number" name="page_id" />
  <input type="submit" />
</form>
