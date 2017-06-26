/**
  * Haarlem page
  */


var container = document.querySelector('.container');

/**
  * Adds all students
  */
fetch('api/?t=student&a=getAll')
  .then(function(response) { return response.json(); })
  .then(function(data) {
    addStudents(data, container);
  });
