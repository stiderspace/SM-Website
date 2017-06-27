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
<script>
var container = document.querySelector('.container');

/**
  * Adds all student work
  * @param data JSON array
  * @param container Container section to append data to
  */
function addStudents(data, container) {
  for(var i = 0; i < data.length; i++) {
    var pContainer = document.createElement('section');
    var tContainer = document.createElement('section');

    var title = document.createElement('h2');
    var p = document.createElement('p');

    pContainer.classList.add('left-photo');
    title.innerHTML = data[i].name;
    p.innerHTML = data[i].bio;


    pContainer.appendChild(tContainer);
    tContainer.appendChild(title);
    tContainer.appendChild(p);
    container.appendChild(pContainer);
  }
}

/**
  * Adds all students
  */
fetch('api/?t=student&a=getAll')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addStudents(data, container);
  });
  </script> <!-- important to have js run after the page is loaded, had issues with js not seeing tags that load after -->

<?php
include "footer.php";
?>
