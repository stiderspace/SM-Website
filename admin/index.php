<?php
/*
  Admin index
*/
$_PAGE_TITLE = "Informatica opleiding - Control Panel";


include 'header.php';

?>

<section class="container">

</section>

<script src="helper.js"></script>
<script src="pages.js"></script>

<script>
  <?php
    /**
      * Checks request method and the get variables
      * @param $m The method either get or post
      * @param $t The table name
      * @param $a Action type, can be create/update/get/getall/delete
      */
    function url($m, $p, $a) {
      if($_SERVER["REQUEST_METHOD"] === $m) {
        if($_GET["p"] === $p) { // Check if the table name is equal to $t
          if($_GET["a"] === $a) { // Check if the action type is equal to $a
            return true;
          }
        }
      } else
        return false;
    }


    if(url("GET", "pages", "list"))
      echo "loadPages()";
    if(url("GET", "pages", "edit"))
      echo "editPage(" . $_GET["i"] . ")";
  ?>
</script>

<?php
include 'footer.php';
?>
