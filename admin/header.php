<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_PAGE_TITLE ?></title>
  <link href="../css/admin.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.2.1.min.js"></script>
</head>
<body>
  <header>
    <section id="menu-desktop">
      <section id="bar">
        <section id="logo">
          Informatica Control Panel
        </section>
        <nav id="menu">
          <li><a onclick="goHome()">Control Panel</a></li>
          <li><a onclick="listPages()">Pages</a></li>
          <li><a onclick="listParagraphs()">Paragraphs</a></li>
          <li><a onclick="listMedia()">Media</a></li>
          <li><a onclick="listStudentWork()">Student Works</a></li>
          <li><a onclick="listStudents()">Students</a></li>
        </nav>
      </section>
    </section>
    <section id="menu-mobile">
      <section id="bar">
        <section id="logo">
          Informatica Control Panel
        </section>
        <section id="hamburger">
          <img src="../img/hamburger.png" class="hamburger" alt="menu" onclick="menu()" />
        </section>
      </section>
      <nav id="menu-mobile-list" onclick="hideMenu()">
        <li><a onclick="goHome()">Control Panel</a></li>
        <li><a onclick="listPages()">Pages</a></li>
        <li><a onclick="listParagraphs()">Paragraphs</a></li>
        <li><a onclick="listMedia()">Media</a></li>
        <li><a onclick="listStudentWork()">Student Works</a></li>
        <li><a onclick="listStudents()">Students</a></li>
      </nav>
    </section>
  </header>
  <script>
    var open = false;

    function menu() {
      var mobile = $('#menu-mobile');
      var menu = $('#menu-mobile-list');

      if(open) {
        open = false;
        $(mobile).css('background', '');
        $(mobile).css('height', 'auto');
        $(menu).css('display', "none");
        $('.hamburger').attr('src', '../img/hamburger.png');
      } else {
        open = true;
        $(mobile).css('background', 'white');
        $(mobile).css('height', '100vh');
        $(menu).css('display', 'block');
        $('.hamburger').attr('src', '../img/close.png');
      }
    }

  </script>
