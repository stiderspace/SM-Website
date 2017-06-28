function clearContainer() {
  $(".container").html("");
}

function hideMenu() {
    $('#menu-mobile').css('background-color', '');
    $('#menu-mobile').css('height', 'auto');
    $('#menu-mobile-list').css('display', 'none');
    $('.hamburger').attr('src', '../img/hamburger.png');
}

function goHome() {
  hideMenu();
  clearContainer();
}

function getPageName(id) {
  if(id == 1)
    return "Home pagina";
  if(id == 2)
    return "Programma";
  if(id == 4)
    return "Werk van studenten";
  if(id == 6)
    return "Haarlem";
}
