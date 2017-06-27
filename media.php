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
<script>
var container = document.querySelector('.container');

/**
  * Adds all media
  * @param data JSON array
  * @param container Container section to append data to
  */
function addAllMedia(data, container) {
  for(var i = 0; i < data.length; i++) {
    var pContainer = document.createElement('section');
    var tContainer = document.createElement('section');

    var title = document.createElement('h2');
    var p = document.createElement('p');

    pContainer.classList.add('left-photo');
    title.innerHTML = data[i].title;
    p.innerHTML = data[i].description;
    pContainer.style.backgroundImage = ("url(img/" + data[i].image_url + ")");


    pContainer.appendChild(tContainer);
    tContainer.appendChild(title);
    tContainer.appendChild(p);
    container.appendChild(pContainer);
  }
}

/**
  * Adds the intro text
  */
fetch('api/?t=media&a=getByPageId&i=3')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addAllMedia(data, container);
  });
  </script> <!-- important to have js run after the page is loaded, had issues with js not seeing tags that load after -->

<?php
include "footer.php";
?>
