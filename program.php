<?php
/*
  Public site
*/
include 'page_helper.php';
Page_helper::set_page_vars(2);

include "header.php";
?>

  <section class="container">


  </section>
  <script>
  /**
    * Program page
    */


  var container = document.querySelector('.container');

  /**
    * Adds the intro text
    */
  fetch('api/?t=paragraph&a=getByPageId&i=2')
    .then(function(response) { return response.json(); })
    .then(function(data) {
      addIntro(data, container);
      addParagraphs(data, container);
    });
    </script> <!-- important to have js run after the page is loaded, had issues with js not seeing tags that load after -->

<?php
include "footer.php";
?>
