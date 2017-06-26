<?php
/*
  Public site
*/
include 'page_helper.php';
Page_helper::set_page_vars(3);


include "header.php";
?>

<section class="container">
  <h1>Opleiding in beeld</h1>

</section>
<script src="js/media.js"></script> <!-- important to have js run after the page is loaded, had issues with js not seeing tags that load after -->

<?php
include "footer.php";
?>
