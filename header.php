<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_PAGE_TITLE ?></title>
  <link href="css/public.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/helper.js"></script>
  <header style="background:url('img/<?php echo $_IMAGE_URL ?>'); background-size: cover; background-position: center;">
    <section id="menu-desktop">
      <section id="inholland-bar">
        <section id="inholland-logo">
          <a href="?t=page&a=get&i=1"><img src="img/inholland.png" alt="Hogeschool Inholland" /></a>
        </section>
        <nav id="inholland-menu">
          <li><a href="#">Opleidingen</a></li>
          <li><a href="#">Contact & info</a></li>
          <li><a href="<?php echo basename('?t=page&a=get&i=' . $_PAGE_ID . '&lang=NL') ?>"><img src="img\nl.png" alt="Nederlands" /></a></li>
          <li><a href="<?php echo basename('?t=page&a=get&i=' . $_PAGE_ID . '&lang=EN') ?>"><img src="img\uk.jpg" alt="English" /></a></li>
        </nav>
      </section>
      <section id="informatica-bar">
        <section id="informatica-title">
          <a href="?t=page&a=get&i=1">Informatica</a>
        </section>
        <nav id="informatica-menu">
          <li><a href="?t=page&a=get&i=2">Programma</a></li>
          <li><a href="?t=page&a=get&i=3">Opleiding in beeld</a></li>
          <li><a href="?t=page&a=get&i=4">Werk van studenten</a></li>
          <li><a href="?t=page&a=get&i=5">(Oud)studenten</a></li>
          <li><a href="?t=page&a=get&i=6">Haarlem</a></li>
        </nav>
      </section>
    </section>
    <section id="menu-mobile">
      <section id="bar">
        <section id="logo">
          <a href="?t=page&a=get&i=1"><img src="img/inholland.png" alt="Hogeschool Inholland" /></a>
        </section>
        <section id="hamburger">
          <img src="img/hamburger.png" class="hamburger" alt="menu" onclick="menu()" />
        </section>
      </section>
      <nav id="menu-mobile-list">
        <li><a href="#">Opleidingen</a></li>
        <li><a href="#">Contact & info</a></li>
        <li><a href="<?php echo basename($_SERVER['PHP_SELF']) . '?t=page&a=get&i=' . $_PAGE_ID . '&lang=NL' ?>">Nederlands</a></li>
        <li><a href="<?php echo basename($_SERVER['PHP_SELF']) . '?t=page&a=get&i=' . $_PAGE_ID . '&lang=EN'  ?>">English</a></li>
        <li><hr /></li>
        <li><a href="?t=page&a=get&i=1">Informatica</a></li>
        <li><a href="?t=page&a=get&i=2">Programma</a></li>
        <li><a href="?t=page&a=get&i=3">Opleiding in beeld</a></li>
        <li><a href="?t=page&a=get&i=4">Werk van studenten</a></li>
        <li><a href="?t=page&a=get&i=5">(Oud)studenten</a></li>
        <li><a href="?t=page&a=get&i=6">Haarlem</a></li>
      </nav>
    </section>
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
            $('.hamburger').attr('src', '/img/hamburger.png');
          } else {
            open = true;
            $(mobile).css('background', 'white');
            $(mobile).css('height', '100vh');
            $(menu).css('display', 'block');
            $('.hamburger').attr('src', '/img/close.png');
          }
      }

    </script>
  </header>
