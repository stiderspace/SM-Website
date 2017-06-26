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
