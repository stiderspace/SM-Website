/**
  * Media page
  */


var container = document.querySelector('.container');

/**
  * Adds the intro text
  */
fetch('api/?t=media&a=getByPageId&i=3')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addAllMedia(data, container);
  });
