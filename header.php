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
        <li><a href="<?php echo basename($_SERVER['PHP_SELF']) . '?lang=NL' ?>"><img src="img\nl.png" alt="Nederlands" /></a></li>
        <li><a href="<?php echo basename($_SERVER['PHP_SELF']) . '?lang=EN'  ?>"><img src="img\uk.jpg" alt="English" /></a></li>
      </nav>
    </section>
    <section id="informatica-bar">
      <section id="toi">
        Domein Techniek, Ontwerp en Informatica
      </section>
      <section id="informatica">
        Informatica
      </section>
      <nav id="informatica-menu">
        <li><a href="#">Programma</a></li>
        <li><a href="#">Opleiding in beeld</a></li>
        <li><a href="#">Werk van studenten</a></li>
        <li><a href="#">(Oud)studenten</a></li>
        <li><a href="#">Haarlem</a></li>
      </nav>
    </section>
  </header>
