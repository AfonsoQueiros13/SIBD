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
  name_album varchar,
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

insert into album values(1,'IGOR','Tyler, The Creator',12,'../../images/artists/tyler/igor.jpeg');
insert into album values(2,'Scorpion','Drake',1,'../../images/artists/drake/scorpion.jpg');
insert into album values(3,'Flower Boy','Tyler, The Creator', 14, '../../images/artists/tyler/flowerboy.jpg');

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

insert into music values(13,2,'Jaded','Scorpion','Drake',201);
insert into music values(14,2,'Finance','Scorpion','Drake',201);
insert into music values(15,2,'Peak','Scorpion','Drake',201);
insert into music values(16,2,'Mob Ties','Scorpion','Drake',201);
insert into music values(31,2,'Survival','Scorpion','Drake',201);
insert into music values(32,2,'Nonstop','Scorpion','Drake',201);

insert into trends values(1);
insert into trends values(2);
