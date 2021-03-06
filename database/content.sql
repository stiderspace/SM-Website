insert into page(id, name, image_url)
values  (1, "Home", "1_header.jpg"),
        (2, "Programma", "2_header.jpg"),
        (3, "Opleiding in beeld", "2_header.jpg"),
        (4, "Werk van studenten", "1_header.jpg"),
        (5, "(Oud)studenten", "2_header.jpg"),
        (6, "Haarlem", "3_header.jpg");

insert into paragraph(title, body, image_url, type, position, page_id)
values  ("Later werken in de IT-wereld?", "We leven in het tijdperk van digitale apparaten: laptops, mobieltjes en tablets zijn niet langer duidelijk uit ons dagelijks leven. Zaken, onderwijs, gezondheidszorg en media kunnen niet meer zonder ICT. De ontwikkelingen zijn snel en de vraag naar jonge, goed opgeleide IT is en blijft hoog. Op Inholland ben je goed voorbereid op de arbeidsmarkt", "", 1, 0, 1),
        ("Het studieprogramma", "Leren doe je samen! Bij Informatica leren de studenten niet alleen van de docenten maar ook van elkaar. Vaak ga je in een groepje met een concrete, praktische opdracht aan de slag en ontwikkel je op die wijze allerlei - voor je latere beroep belangrijke - skills. Opdrachten die veelal betrekking hebben op de twee belangrijkste facetten van software ontwikkeling: ontwerpen en coderen.", "", 1, 0, 2),
        ("Design", "Realiseren van ontwerpen gaat met behulp van programmeertalen zoals Java, C# en C. Tijdens de opleiding krijg je over de verschillende semesters heen les over programmeertalen die het meest voorkomend zijn binnen de industrie. Hiermee heb je bij afronding van je opleiding een skillset waar veel vraag naar is op de arbeidsmarkt.", "", 2, 0, 2),
        ("Structureren", "Om goede software te realiseren is het van groot belang dit zorgvuldig te ontwerpen. Bij InHolland krijg je les over verschillende aspecten van software design waaronder vakken over UML - unified modelling language - en UID - user interface design.", "", 3, 0, 2),
        ("Coderen", "Realiseren van ontwerpen gaat met behulp van programmeertalen zoals Java, C# en C. Tijdens de opleiding krijg je over de verschillende semesters heen les over programmeertalen die het meest voorkomend zijn binnen de industrie. Hiermee heb je bij afronding van je opleiding een skillset waar veel vraag naar is op de arbeidsmarkt.", "", 2, 0, 2),
        ("Werk van studenten", "Hieronder zie je een overzicht van verschillende stukken werk van studenten. Dit kan een project op GitHub zijn maar ook een collectie van ontwerpen op Behance.", "", 1, 0, 4),
        ("Haarlem", "Haarlem, ooit ontstaan als Romeinse nederzetting, ontving in 1245 stadsrechten van graaf Willem II van Holland. Vanaf dat moment groeide Haarlem uit tot ��n van de belangrijkste steden van Holland. Tijdens de Tachtigjarige oorlog verzette Haarlem zich hevig tegen de Spaanse overheersing. Eenmaal in handen van Willem van Oranje trokken veel Vlamingen naar de stad, waarvan de invloeden ook nu nog zichtbaar zijn. In de Gouden Eeuw was Haarlem een geliefde woon- en verblijfplaats voor de rijken een machtigen.", "", 1, 0, 6),
        ("", "Kom je bij ons studeren, dan kies je er misschien ook wel voor om in Haarlem te komen wonen. Ben je op zoek naar een gezellige studentenkamer? We helpen je graag op weg met een paar handige tips.", "", 3, 0, 6);

insert into media(title, description, image_url, url, url_title, page_id)
values  ("Informatica Vlogs van Jorrit", "Mijn naam is Jorrit Heijn. Ik ben 20 jaar oud, zit in mijn tweede jaar van Informatica en kom uit Alkmaar.  Ik vind het leuk om dingen te cre�ren en creatief te zijn. Dit doe ik namelijk bij mijn studie en ook met de vlogs. Ik hoop dat mijn vlogs jullie entertainen, iets leren of inspireren. Heb je vragen, stel ze in de comments.", "media_1.jpg", "http://youtube.com", "Bekijk op YouTube", 3),
        ("Someren kamp", "De jaarlijkse eerstejaars kamp in Someren", "media_2.jpg", "http://facebook.com", "Bekijk album op Facebook", 3);

insert into student_work(title, description, url, url_title)
values  ("Club Management System", "Een content management system gebouwd voor een nachtclub met Play framework voor Java. Gemaakt door tweedejaarsleerling Haki Karer Taylan", "https://github.com/hktaylan/SkyApp", "Bekijk project op Github"),
        ("Maps & Others", "Een collectie van tekeningen gemaakt door eerstejaarsleerling Maurice.", "https://github.com/hktaylan/SkyApp", "Bekijk project op Behance"),
        ("Websites van eerste jaars", "Bekijk hier de websites die eerte jaars individuele in de eerste periode van hun opelding hebben ontworpen en gerealiseerd.", "http://610462.infhaarlem.nl/", "Bekijk website");

insert into student(name, image_url, bio, linkedin_url)
values  ("Dennis van der Hammen", "student_1", "Dennis van der Hammen bofdy text", "https://www.linkedin.com/in/dvanderhammen/"),
        ("Inge Wisselink", "student_2", "Ik ben Inge Wisselink, docente aan de opleiding Informatica in Haarlem. De vakken waarin ik les geef zijn communicatieve vaardigheden, projectvaardigheden en projectmanagement. Daarnaast ben ik studiebegeleider.Zelf heb ik een universitaire studie Italiaanse Taal- en Letterkunde gedaan. Daarnaast heb ik diverse opleidingen gedaan op het gebied van ICT, projectmanagement (o.a. Prince2) en de postacademische opleiding tot Informatica Intermediair.", "http://www.linkedin.com");
