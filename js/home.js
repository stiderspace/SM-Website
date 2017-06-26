/**
  * Home page
  * Loads just an intro paragraph and 2 media items
  */


var container = document.querySelector('.container');

/**
  * Adds the intro text
  */
fetch('api/?t=paragraph&a=getByPageId&i=1')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addIntro(data, container);
  });
