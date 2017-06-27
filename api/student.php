<?php


/**
  * Controls the student work table in the database
  * Only returns JSON
  */
class Student {

  function create() {
    $name = $_POST["name"];
    $bio = $_POST["bio"];

    $sql = "insert into student(name, bio, url)
    values (\"{$name}\", \"{$bio}\");";

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
      DB::getAll("student");
  }

  /**
    * Only accepting numeric input
    * @param $id The primary key of a student
    * @return Returns single student in JSON
    */
  function getById($id) {
    DB::getById($id, "student");
  }

  /**
    * Updates the student
    * @param $id The student id
    */
  function update($id) {
    $name = $_POST["name"];
    $image_url = $_POST["image_url"];
    $bio = $_POST["bio"];
    $linkedin_url = $_POST["linkedin_url"];

    $sql = "set name = \"{$name}\", image_url = \"{$image_url}\", bio = \"{$bio}\", linkedin_url = \"{$linkedin_url}\"
            where id = {$id}";

    DB::update("student", $sql);
  }

  function delete($id) {
    try {
      DB::delete($id, "student");
    } catch(Exception $e) {
      echo "Error {$e->getMessage()}";
    }
  }
}
?>
