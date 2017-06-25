<?php
/*
  Public site router
*/

/**
  * Checks request method and the get variables
  * @param $m The method either get or post
  * @param $t The table name
  * @param $a Action type, can be create/update/get/getall/delete
  * @param $i Page ID
  */
function url($m, $t, $a, $i) {
  if($_SERVER["REQUEST_METHOD"] === $m) {
    if($_GET["t"] === $t) { // Check if the table name is equal to $t
      if($_GET["a"] === $a) { // Check if the action type is equal to $a
        if($_GET["i"] == $i)
          return true;
      }
    }
  } else
    return false;
}

/* Hardcoded urls unfortunately, cba to make this complex for a pre-defined website structure */
if(url("GET", "page", "get", 1))
  include 'home.php';
else if(url("GET", "page", "get", 2))
  include 'program.php';
else if(url("GET", "page", "get", 3))
  include 'media.php';
else if(url("GET", "page", "get", 4))
  include 'student_work.php';
else if(url("GET", "page", "get", 5))
  include 'students.php';
else if(url("GET", "page", "get", 6))
  include 'haarlem.php';
else
  include 'home.php';

?>
