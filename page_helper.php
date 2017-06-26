<?php

class Page_helper {
  //Remove UTF8 Bom
  function remove_utf8_bom($text) {
      $bom = pack('H*','EFBBBF');
      $text = preg_replace("/^$bom/", '', $text);
      return $text;
  }

  /**
    * Sets all page variables
    * @param $id Page id
    */
  function set_page_vars($id) {
    global $_PAGE_TITLE, $_IMAGE_URL, $_PAGE_ID;

    $json = file_get_contents("http://1504.nl/api/?t=page&a=get&i=" . $id);
    $json = Page_helper::remove_utf8_bom($json);
    $page = json_decode($json);
    // print_r($page);

    $_PAGE_ID = $page[0]->id;
    $_PAGE_TITLE = $page[0]->name;
    $_IMAGE_URL = $page[0]->image_url;
  }
}
?>
