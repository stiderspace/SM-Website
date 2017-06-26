<?php


/**
  * Controls the student work table in the database
  * Only returns JSON
  */
class Student_work {

  function create() {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $url = $_POST["url"];
    $url_title = $_POST["url_title"];

    $sql = "insert into student_work(title, description, url, url, url_title)
    values (\"{$title}\", \"{$description}\", \"{$url}\", \"{$url_title}\");";

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
      DB::getAll("student_work");
  }

  /**
    * Only accepting numeric input
    * @param $id The primary key of a student_work
    * @return Returns single student_work in JSON
    */
  function getById($id) {
    DB::getById($id, "student_work");
  }

  /**
    * Updates the student_work
    * @param $id The student_work id
    */
  function update($id) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $url = $_POST["url"];
    $url_title = $_POST["url_title"];

    $sql = "set title = {$title}, description = {$description}, url = {$url}, url_title = {$url_title}
            where id = {$id}";

    DB::update("student_work", $sql);
  }

  function delete($id) {
    try {
      DB::delete($id, "student_work");
    } catch(Exception $e) {
      echo "Error {$e->getMessage()}";
    }
  }
}
?>
