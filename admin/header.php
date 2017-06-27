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
      <section id="admin-bar">
        <section id="inholland-logo">
          Informatica Control Panel
        </section>
        <nav id="inholland-menu">
          <li><a onclick="loadControlPanel()">Control Panel</a></li>
          <li><a onclick="loadPages()">Pages</a></li>
          <li><a onclick="loadProgram()">Program</a></li>
          <li><a onclick="loadMedia()">Media</a></li>
          <li><a onclick="loadStudentWorks()">Student Works</a></li>
          <li><a onclick="loadStudents()">Students</a></li>
          <li><a onclick="loadHaarlem()">Haarlem</a></li>
        </nav>
      </section>
    </section>
    <section id="menu-mobile">
      <section id="menu-mobile-bar">
        <section id="menu-mobile-logo">
          Informatica Control Panel
        </section>
        <section id="menu-mobile-hamburger">
          <img src="../img/hamburger.png" id="hamburger" alt="menu" onclick="menu()" />
        </section>
      </section>
      <nav id="menu-mobile-list">
        <li><a onclick="loadControlPanel()">Control Panel</a></li>
        <li><a onclick="loadPages()">Pages</a></li>
        <li><a onclick="loadProgram()">Program</a></li>
        <li><a onclick="loadMedia()">Media</a></li>
        <li><a onclick="loadStudentWorks()">Student Works</a></li>
        <li><a onclick="loadStudents()">Students</a></li>
        <li><a onclick="loadHaarlem()">Haarlem</a></li>
      </nav>
    </section>
  </header>
  <script>
    var open = false;

    function menu() {
      var mobile = document.querySelector('#menu-mobile');
      var menu = document.querySelector('#menu-mobile-list');

        if(open) {
          open = false;
          mobile.style.backgroundColor = "";
          mobile.style.height = "auto";
          menu.style.display = "none";
        } else {
          open = true;
          mobile.style.backgroundColor = "white";
          mobile.style.height = "100vh";
          menu.style.display = "block";
        }
    }

  </script>
