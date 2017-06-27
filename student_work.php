<?php
/*
  Public site
*/
include 'page_helper.php';
Page_helper::set_page_vars(4);


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
function addStudentWork(data, container) {
  for(var i = 0; i < data.length; i++) {
    var workContainer = document.createElement('section');

    var title = document.createElement('h2');
    var description = document.createElement('p');
    var link = document.createElement('a');

    title.innerHTML = data[i].title;
    description.innerHTML = data[i].description;
    link.setAttribute('href', data[i].url);
    link.innerText = data[i].url_title;

    workContainer.appendChild(title);
    workContainer.appendChild(description);
    workContainer.appendChild(link);
    container.appendChild(workContainer);
  }
}

/**
  * Adds the intro text
  */
fetch('api/?t=student_work&a=getAll')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addStudentWork(data, container);
  });
  </script> <!-- important to have js run after the page is loaded, had issues with js not seeing tags that load after -->

<?php
include "footer.php";
?>
