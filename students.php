<?php
/*
  Public site
*/
include 'page_helper.php';
Page_helper::set_page_vars(5);


include "header.php";
?>

<section class="container">


</section>
<script src="js/students.js"></script> <!-- important to have js run after the page is loaded, had issues with js not seeing tags that load after -->

<?php
include "footer.php";
?>
