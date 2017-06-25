<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_PAGE_TITLE ?></title>
  <link href="css\public.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <header>
    <section id="inholland-bar">
      <section id="inholland-logo">
        <img src="img\inholland.png" alt="Hogeschool InHolland" />
      </section>
      <nav id="inholland-menu">
        <li><a href="#">Opleidingen</a></li>
        <li><a href="#">Contact & info</a></li>
        <li><a href="<?php echo basename($_SERVER['PHP_SELF']) . '?t=page&a=get&i=' . $_PAGE_ID . '&lang=NL' ?>"><img src="img\nl.png" alt="Nederlands" /></a></li>
        <li><a href="<?php echo basename($_SERVER['PHP_SELF']) . '?t=page&a=get&i=' . $_PAGE_ID . '&lang=EN'  ?>"><img src="img\uk.jpg" alt="English" /></a></li>
      </nav>
    </section>
    <section id="informatica-bar">
      <section id="informatica">
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
  </header>
