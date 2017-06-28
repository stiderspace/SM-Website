<?php


/**
  * Controls the paragraph table in the database
  * Only returns JSON
  */
class Page {
  /**
    * Returns single page
    * Only accepting numeric input
    * @param $id The primary key of a page
    * @return Returns JSON notation of a page
    */
  function getById($id) {
    DB::getById($id, "page");
  }

  /**
    * @return All pages in JSON
    */
  function getAll() {
    DB::getAll("page");
  }

  /**
    * Updates the page
    * @param $id The page id
    */
  function update($id) {
    $name = $_POST["name"];
    $image_url = $_FILES["image_url"]["name"];

    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image_url"]["name"]);

    move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file);

    $sql = "set name = \"{$name}\", image_url = \"{$image_url}\"
            where id = {$id}";

    DB::update("page", $sql, "../admin/?p=pages&a=edit&i=" . $id);
  }

}
?>
