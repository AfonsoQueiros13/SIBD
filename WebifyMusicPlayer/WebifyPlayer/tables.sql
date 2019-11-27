---------------SIBD 19/20 Webify Music Player Afonso Queirós Bruno Baptista--------------
--user table--
CREATE TABLE normal_user (
  id integer PRIMARY KEY,
  email varchar,
  password varchar
);

--profile table--
CREATE TABLE profile (
  id_user integer REFERENCES normal_user,
  name_profile varchar,
  facebook_link varchar,
  status integer
);

--music table--
CREATE TABLE music (
  id integer PRIMARY KEY,
  name_music varchar,
  autor varchar,
  album varchar,
  duration integer
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

--playlist table--
CREATE TABLE playlist_musics (
  id_music integer REFERENCES music,
  id_playlist integer REFERENCES playlist
);

--friends table--
CREATE TABLE friends ( id_user integer references normal_user);

--trends table--
CREATE TABLE trends (id_music INTEGER references music);

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

insert into normal_user values (1, 'abcd@gmail.com', '1324');
insert into normal_user values (2, 'odiad@gmail.com', 'asdf');
insert into normal_user values (3, 'aasdfd@gmail.com', '1gh4');
insert into normal_user values (4, 'ioijcd@gmail.com', '13sdfgsdfg4');

insert into music values (100,'ye','kanye','aosd', 120);
insert into music values (101,'earfquake','tyler','igor', 120);
