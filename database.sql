/*
Geschreven door Haki Karer Taylan
voor het Social Media project van
de opleiding Informatica aan de
hogeschool InHolland Haarlem.
*/

create table page (
  id int not null,
  name varchar(60),
  image_url varchar(200),
  primary key (id)
);

create table paragraph (
  id int not null,
  title varchar(60),
  body text,
  image_url varchar(200),
  soort int,
  position int,
  page_id int not null,
  primary key (id),
  foreign key (page_id) references page (id)
    on update cascade on delete restrict
);

create table media (
  id int not null,
  title varchar(60),
  description text,
  image_url varchar(200),
  url text,
  url_title varchar(60),
  position int(2),
  primary key (id)
);

create table student_work (
  id int not null,
  title varchar(60),
  description text,
  url text,
  url_title varchar(60),
  primary key (id)
);

create table student (
  id int not null,
  name varchar(60),
  image_url varchar(200),
  bio text,
  linkedin_url text,
  primary key (id)
);


insert into paragraph (id, title, body, soort)
values  (1, "test", "jaja", 3);
