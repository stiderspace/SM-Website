  /*
  Geschreven door Haki Karer Taylan
  voor het Social Media project van
  de opleiding Informatica aan de
  hogeschool InHolland Haarlem.
  */

create table Alinea (
  id int(3) not null,
  titel varchar(60),
  tekst text,
  foto_url varchar(200),
  soort int(1),
  sortering int(2),
  pagina int(2) not null,
  primary key (id),
  foreign key pagina references Pagina(id)
);

create table Media (
  id int(2) not null,
  titel varchar(60),
  beschrijving text,
  foto_url varchar(200),
  link text,
  linktitel varchar(60),
  sortering int(2),
  primary key (id)
);

create table Werkstuk (
  id int(2) not null,
  titel varchar(60),
  beschrijving text,
  link text,
  linktitel varchar(60),
  primary key (id)
);

create table Student (
  id int(2) not null,
  naam varchar(60),
  foto_url varchar(200),
  tekst text,
  linkedin_url text,
  primary key (id)
);


create table Pagina (
  id int(2) not null,
  naam varchar(60),
  foto_url varchar(200)
);
