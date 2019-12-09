---------------SIBD 19/20 Webify Music Player Afonso Queirós Bruno Baptista--------------
--user table--
CREATE TABLE normal_user (
  id integer PRIMARY KEY,
  email varchar,
  nick_name varchar,
  passwd varchar
);

--profile table--
CREATE TABLE profile (
  id_user integer REFERENCES normal_user,
  name_profile varchar,
  facebook_link varchar,
  status_profile integer
);

--music table--
CREATE TABLE music (
  id integer PRIMARY KEY,
  id_album integer REFERENCES album,
  name_music varchar,
  name_album varchar,
  autor varchar,
  duration integer
);

--album table--
CREATE TABLE album(
  id integer PRIMARY KEY,
  nome_album varchar,
  artist varchar,
  number_songs integer,
  img_path varchar
);

--playlist table--
CREATE TABLE playlist (
  id integer PRIMARY KEY,
  name varchar,
  autor varchar,
  number_musics integer
);

--genre table --
CREATE TABLE genre (id integer PRIMARY KEY, name varchar);

--liked_musics table--
CREATE TABLE liked_musics (
  id_user INTEGER references normal_user,
  id_music INTEGER references music
);

--liked albums table--
CREATE TABLE liked_albums(
  id_user INTEGER references normal_user,
  id_album INTEGER references album
);

--playlist table--
CREATE TABLE playlist_musics (
  id_music integer REFERENCES music,
  id_playlist integer REFERENCES playlist
);

--friends table--
CREATE TABLE friends ( id_user integer references normal_user);

--trends table--
CREATE TABLE trends (id_album INTEGER references album);

--liked_playlists table--
CREATE TABLE liked_playlists (
  id_user  INTEGER references normal_user,
  id_playlist integer REFERENCES playlist
);

--new_releases_by_genre table --
CREATE TABLE new_releases_by_genre (
  id_music integer REFERENCES music,
  id_genre integer REFERENCES genre
);

--playlists_trends_by_genre table--
CREATE TABLE playlists_trends_by_genre (
  id_playlist INTEGER references playlist,
  id_genre INTEGER references genre
);

insert into normal_user values (1, 'webify-admin@gmail.com','admin', 'admin');

insert into profile values(1, 'admin', 'link', 1);

insert into album values(1,'IGOR','Tyler, The Creator',12,'../../images/artists/tyler/igor/igor.jpeg');
insert into album values(2,'Scorpion','Drake',6,'../../images/artists/drake/scorpion/scorpion.jpg');
insert into album values(3,'Flower Boy','Tyler, The Creator', 14, '../../images/artists/tyler/flowerboy/flowerboy.jpg');
insert into album values(4,'Illmatic','Nas',6, '../../images/artists/nas/illmatic/illmatic.jpeg');
insert into album values(5,'Physical Rappin','Da Steez Brothaz',6, '../../images/artists/steez_brothaz/physical_rappin/physical_rappin.jpeg');
insert into album values(6,'Doe or Die','AZ',6, '../../images/artists/az/doe_or_die/doe_or_die.jpeg');
insert into album values(7,'Distant Relatives','Damian Marley',6, '../../images/artists/damian_marley/distant_relatives/distant_relatives.jpeg');


/*IGOR;TYLER*/
insert into music values(1,1,'IGORS THEME','IGOR' ,'Tyler, The Creator',201);
insert into music values(2,1,'EARFQUAKE','IGOR','Tyler, The Creator',201);
insert into music values(3,1,'I THINK','IGOR','Tyler, The Creator',201);
insert into music values(4,1,'Exactly What You Run From You End Up Chasing','IGOR','Tyler, The Creator',201);
insert into music values(5,1,'RUNNING OUT OF TIME','IGOR','Tyler, The Creator',201);
insert into music values(6,1,'NEW MAGIC WAND','IGOR','Tyler, The Creator',201);
insert into music values(7,1,'A BOY IS A GUN','IGOR','Tyler, The Creator',201);
insert into music values(8,1,'Puppet','IGOR','Tyler, The Creator',201);
insert into music values(9,1,'WHATS GOOD','IGOR','Tyler, The Creator',201);
insert into music values(10,1,'GONE, GONE/ THANK YOU','IGOR','Tyler, The Creator',201);
insert into music values(11,1,'I DONT LOVE YOU ANYMORE','IGOR','Tyler, The Creator',201);
insert into music values(12,1,'ARE WE STILL FRIENDS','IGOR','Tyler, The Creator',201);


/*SCORPION;DRAKE*/
insert into music values(13,2,'Jaded','Scorpion','Drake',201);
insert into music values(14,2,'Finesse','Scorpion','Drake',201);
insert into music values(15,2,'Peak','Scorpion','Drake',201);
insert into music values(16,2,'Mob Ties','Scorpion','Drake',201);
insert into music values(31,2,'Survival','Scorpion','Drake',201);
insert into music values(32,2,'Nonstop','Scorpion','Drake',201);


/*FLOWER BOY;TYLER*/
insert into music values(17,3,'Foreword','Flower Boy','Tyler, The Creator',201);
insert into music values(18,3,'Where This Flower Blooms','Flower Boy','Tyler, The Creator',201);
insert into music values(19,3,'Sometimes...','Flower Boy','Tyler, The Creator',201);
insert into music values(20,3,'See You Again','Flower Boy','Tyler, The Creator',201);
insert into music values(21,3,'Who Dat Boy','Flower Boy','Tyler, The Creator',201);
insert into music values(22,3,'Pothole','Flower Boy','Tyler, The Creator',201);
insert into music values(23,3,'Garden Shed','Flower Boy','Tyler, The Creator',201);
insert into music values(24,3,'Boredom','Flower Boy','Tyler, The Creator',201);
insert into music values(25,3,'I Aint Got Time','Flower Boy','Tyler, The Creator',201);
insert into music values(26,3,'911/Mr Lonely','Flower Boy','Tyler, The Creator',201);
insert into music values(27,3,'Droppin Seeds','Flower Boy','Tyler, The Creator',201);
insert into music values(28,3,'November','Flower Boy','Tyler, The Creator',201);
insert into music values(29,3,'Glitter','Flower Boy','Tyler, The Creator',201);
insert into music values(30,3,'Enjoy Right Now, Today','Flower Boy','Tyler, The Creator',201);

/*ILLMATIC;NAS*/

insert into music values(33,4,'The Genesis','Illmatic','Nas',201);
insert into music values(34,4,'N.Y. State of Mind','Illmatic','Nas',201);
insert into music values(35,4,'Life`s a Bitch','Illmatic','Nas',201);
insert into music values(36,4,'The World is Yours','Illmatic','Nas',201);
insert into music values(37,4,'Halftime','Illmatic','Nas',201);
insert into music values(38,4,'One Love','Illmatic','Nas',201);


/*PHYSICAL RAPPIN;DA STEEZ BROTHAZ*/

insert into music values(39,5,'Todo Sigue Igual','Physical Rappin','Da Steez Brothaz',201);
insert into music values(40,5,'Posible es Ahora','Physical Rappin','Da Steez Brothaz',201);
insert into music values(41,5,'Dominando el Mic','Physical Rappin','Da Steez Brothaz',201);
insert into music values(42,5,'90`s Back','Physical Rappin','Da Steez Brothaz',201);
insert into music values(43,5,'Ready 2 Funk','Physical Rappin','Da Steez Brothaz',201);
insert into music values(44,5,'Mi Barrio','Physical Rappin','Da Steez Brothaz',201);
insert into music values(45,5,'Dias Grises','Physical Rappin','Da Steez Brothaz',201);


/*DOE OR DIE;AZ*/

insert into music values(46,6,'Uncut Raw','Doe or Die','AZ',201);
insert into music values(47,6,'Gimme Your`s','Doe or Die','AZ',201);
insert into music values(48,6,'Ho Happy Jackie','Doe or Die','AZ',201);
insert into music values(49,6,'Rather Unique','Doe or Die','AZ',201);
insert into music values(50,6,'I Feel for You','Doe or Die','AZ',201);
insert into music values(51,6,'Doe or Die','Doe or Die','AZ',201);



/*DISTANT RELATIVES;DAMIAN MARLEY*/

insert into music values(52,7,'As We Enter','Distant Relatives','Damian Marley',201);
insert into music values(53,7,'Tribes at War','Distant Relatives','Damian Marley',201);
insert into music values(54,7,'Strong Will Continue','Distant Relatives','Damian Marley',201);
insert into music values(55,7,'Afrika must Wake Up','Distant Relatives','Damian Marley',201);
insert into music values(56,7,'Patience','Distant Relatives','Damian Marley',201);
insert into music values(57,7,'Leaders','Distant Relatives','Damian Marley',201);








insert into trends values(1);
insert into trends values(2);
insert into trends values(3);
insert into trends values(4);
insert into trends values(5);
insert into trends values(6);
insert into trends values(7);
