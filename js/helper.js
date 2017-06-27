/**
  * Adds a page intro
  * @param data Array containing the intro paragraph of the page
  * @param container The container section to append the data to
  */
function addIntro(data, container) {
  var intro = document.createElement('section');
  intro.classList.add('intro');
  var title = document.createElement('h1');
  var paragraph = document.createElement('p');

  title.innerHTML = data[0].title;
  paragraph.innerHTML = data[0].body;

  intro.appendChild(title);
  intro.appendChild(paragraph);
  container.appendChild(intro);
}

/**
  * Adds all paragraphs except intro paragraph
  * @param data JSON array
  * @param container Container section to append data to
  */
function addParagraphs(data, container) {
  for(var i = 1; i < data.length; i++) {
    var pContainer = document.createElement('section');
    var tContainer = document.createElement('section');

    var title = document.createElement('h2');
    var p = document.createElement('p');

    // left-photo
    if(data[i].type == 2) {
      pContainer.classList.add('left-photo');
      title.innerHTML = data[i].title;
      p.innerHTML = data[i].body;
      pContainer.style.backgroundImage = ("url(img/" + data[i].image_url + ")");
    }
    // right-photo
    if(data[i].type == 3) {
      pContainer.classList.add('right-photo');
      title.innerHTML = data[i].title;
      p.innerHTML = data[i].body;
      pContainer.style.backgroundImage = "url(img/" + data[i].image_url + ")";
    }
    // normal
    if(data[i].type == 4) {
      pContainer.classList.add('normal');
      title.innerHTML = data[i].title;
      p.innerHTML = data[i].body;
    }
    // normal without title
    if(data[i].type == 5) {
      pContainer.classList.add('normal');
      p.innerHTML = data[i].body;
    }


    pContainer.appendChild(tContainer);
    tContainer.appendChild(title);
    tContainer.appendChild(p);
    container.appendChild(pContainer);
  }
}
