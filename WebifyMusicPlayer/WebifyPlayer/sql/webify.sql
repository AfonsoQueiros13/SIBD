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

insert into album values(1,'IGOR','Tyler, The Creator',12,'../../images/artists/tyler/tyler.jpeg');
insert into album values(2,'Scorpion','Drake',1,'../../images/artists/drake/scorpion.jpg');


insert into music values(1,1,'IGORS THEME','Tyler, The Creator',201);
insert into music values(2,1,'EARFQUAKE','Tyler, The Creator',201);
insert into music values(3,1,'I THINK','Tyler, The Creator',201);
insert into music values(4,1,'Exactly What You Run From You End Up Chasing','Tyler, The Creator',201);
insert into music values(5,1,'RUNNING OUT OF TIME','Tyler, The Creator',201);
insert into music values(6,1,'NEW MAGIC WAND','Tyler, The Creator',201);
insert into music values(7,1,'A BOY IS A GUN','Tyler, The Creator',201);
insert into music values(8,1,'Puppet','Tyler, The Creator',201);
insert into music values(9,1,'WHATS GOOD','Tyler, The Creator',201);
insert into music values(10,1,'GONE, GONE/ THANK YOU','Tyler, The Creator',201);
insert into music values(11,1,'I DONT LOVE YOU ANYMORE','Tyler, The Creator',201);
insert into music values(12,1,'ARE WE STILL FRIENDS','Tyler, The Creator',201);

insert into music values(13,2,'Jaded','Tyler, The Creator',201);
insert into music values(14,2,'Finance','Tyler, The Creator',201);
insert into music values(15,2,'Peak','Tyler, The Creator',201);
insert into music values(16,2,'Mob Ties','Tyler, The Creator',201);

insert into trends values(1);
insert into trends values(2);
