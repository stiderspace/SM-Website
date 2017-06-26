<?php
/**
  * API of the backend
  * Functions as router for DB table controllers
  *
  * Haki Karer Taylan - www.vresh.nl
  * Social Media project
  */



/**
  * get models
  */
include "DB.php";
include "page.php";
include "paragraph.php";
include "media.php";
include "student_work.php";
include "student.php";



/**
  * Checks request method and the get variables
  * @param $m The method either get or post
  * @param $t The table name
  * @param $a Action type, can be create/update/get/getall/delete
  */
function url($m, $t, $a) {
  if($_SERVER["REQUEST_METHOD"] === $m) {
    if($_GET["t"] === $t) { // Check if the table name is equal to $t
      if($_GET["a"] === $a) { // Check if the action type is equal to $a
        return true;
      }
    }
  } else
    return false;
}



/* -------------    page   -------------- */
/**
  * Gets all pages
  */
if(url("GET", "page", "getAll"))
  return Page::getAll();

/**
  * Gets page
  */
if(url("GET", "page", "get")) {
  if(is_numeric($_GET["i"]))
    return Page::getById($_GET["i"]); }

/**
  * Updates paragraph with corresponding $id
  */
if(url("POST", "page", "update"))
  return Page::update($_GET["i"]);



/* ------------- paragraph -------------- */
/**
  * Creates paragraph
  */
if(url("POST", "paragraph", "create"))
  return Paragraph::create();

/**
  * Gets all paragraphs
  */
if(url("GET", "paragraph", "getAll"))
  return Paragraph::getAll();

/**
  * Gets paragraph by ID - checks if the id is a number
  */
if(url("GET", "paragraph", "get")) {
  if(is_numeric($_GET["i"]))
    return Paragraph::getById($_GET["i"]); }

/**
  * Get paragraph by page id
  * return json paragraph
  */
if(url("GET", "paragraph", "getByPageId"))
  return Paragraph::getByPageId($_GET["i"]);

/**
  * Updates paragraph with corresponding $id
  */
if(url("POST", "paragraph", "update"))
  return Paragraph::update($_GET["i"]);

/**
  * Deletes paragraph with corresponding $id
  */
if(url("GET", "paragraph", "delete"))
  return Paragraph::delete($_GET["i"]);



/* ------------- Media -------------- */
/**
  * Creates media
  */
if(url("POST", "media", "create"))
  return Media::create();

/**
  * Gets all media
  */
if(url("GET", "media", "getAll"))
  return Media::getAll();

/**
  * Gets media by ID - checks if the id is a number
  */
if(url("GET", "media", "get")) {
  if(is_numeric($_GET["i"]))
    return Media::getById($_GET["i"]); }

/**
  * Get media by page id
  * return json media
  */
if(url("GET", "media", "getByPageId"))
  return Media::getByPageId($_GET["i"]);

/**
  * Updates media with corresponding $id
  */
if(url("POST", "media", "update"))
  return Media::update($_GET["i"]);

/**
  * Deletes media with corresponding $id
  */
if(url("GET", "media", "delete"))
  return Media::delete($_GET["i"]);



/* -------------    student_work   -------------- */
/**
  * Creates student_work
  */
if(url("POST", "student_work", "create"))
  return Student_work::create();

/**
  * Gets all pages
  */
if(url("GET", "student_work", "getAll"))
  return Student_work::getAll();

/**
  * Gets page
  */
if(url("GET", "student_work", "get")) {
  if(is_numeric($_GET["i"]))
    return Student_work::getById($_GET["i"]); }

/**
  * Updates paragraph with corresponding $id
  */
if(url("POST", "student_work", "update"))
  return Student_work::update($_GET["i"]);

/**
  * Deletes student_work with corresponding $id
  */
if(url("GET", "student_work", "delete"))
  return Student_work::delete($_GET["i"]);



/* -------------    student   -------------- */
/**
  * Creates student
  */
if(url("POST", "student", "create"))
  return Student::create();

/**
  * Gets student
  */
if(url("GET", "student", "getAll"))
  return Student::getAll();

/**
  * Gets student
  */
if(url("GET", "student", "get")) {
  if(is_numeric($_GET["i"]))
    return Student::getById($_GET["i"]); }

/**
  * Updates student with corresponding $id
  */
if(url("POST", "student", "update"))
  return Student::update($_GET["i"]);

/**
  * Deletes student with corresponding $id
  */
if(url("GET", "student", "delete"))
  return Student::delete($_GET["i"]);


?>
