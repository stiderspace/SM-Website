/**
  * Haarlem page
  */


var container = document.querySelector('.container');

/**
  * Adds the intro text
  */
fetch('api/?t=paragraph&a=getByPageId&i=4')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addIntro(data, container);
  });
