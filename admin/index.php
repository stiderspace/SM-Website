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
<script src="paragraphs.js"></script>

<script>
  <?php
    /**
      * Checks request method and the get variables
      * @param $m The method either get or post
      * @param $t The table name
      * @param $a Action type, can be list or edit
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
    if(url("GET", "paragraphs", "list"))
      echo "listParagraphs()";
    if(url("GET", "paragraphs", "edit"))
      echo "editParagraph(" . $_GET["i"] . ")";
    if(url("GET", "media", "list"))
      echo "loadMedia()";
    if(url("GET", "media", "edit"))
      echo "editMedia(" . $_GET["i"] . ")";
    if(url("GET", "student_work", "list"))
      echo "loadStudentWork()";
    if(url("GET", "student_work", "edit"))
      echo "editStudentWork(" . $_GET["i"] . ")";
    if(url("GET", "students", "list"))
      echo "loadStudents()";
    if(url("GET", "students", "edit"))
      echo "editStudents(" . $_GET["i"] . ")";

  ?>
</script>

<?php
include 'footer.php';
?>
