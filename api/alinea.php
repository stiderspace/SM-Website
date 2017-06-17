<?php

/**
  * Geeft een enkele alinea
  * @param $id De primary key van een alinea
  * @return json Geeft een JSON notatie van een alinea
  */
function getAlineaById($id) {
  $query =  "select * from Alinea " .
            "where id is " . $id;

  try {
    $result = $connection->query($query);


  } catch(Exception $e) {
    return $id . "not found";
  }
}


/**
  * Geeft alle alinea's van een pagina terug
  * @param $id De primary key van een pagina
  */
function getAlineasByPageId($id) {
  $query =  "select * from Alinea " .
            "where pageid is " . $id;

  try {
    $result = $connection->query($query);
  } catch(Exception $e) {
    return "No results for this page";
  }
}

/**
  * Maakt een alinea aan
  * @param $title Titel van de alinea
  * @param $tekst Tekst van de alinea
  * @param $foto_url Url van de afbeelding
  * @param $soort Type alinea, is van belang voor de representatie
  * @param $sortering Geeft de positie van de alinea aan op een pagina
  * @param $pagina_id De pagina voor deze alinea
  */
function createAlinea() {

}


?>
