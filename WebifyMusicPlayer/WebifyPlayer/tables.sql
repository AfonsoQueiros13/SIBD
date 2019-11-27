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
  name varchar,
  facebook_link varchar,
  status boolean
);

--music table--
CREATE TABLE music (
  id integer PRIMARY KEY,
  name varchar,
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
  id_user INTEGER FOREIGN KEY references normal_user,
  id_music INTEGER FOREIGN KEY references music
);

--playlist table--
CREATE TABLE playlist_musics (
  id_music integer FOREIGN KEY REFERENCES music,
  id_playlist integer FOREIGN KEY REFERENCES playlist
);

--friends table--
CREATE TABLE friends (id_user integer FOREIGN KEY references normal_user);

--trends table--
CREATE TABLE trends (id_music INTEGER FOREIGN KEY references music);

--liked_playlists table--
CREATE TABLE liked_playlists (
  id_user  INTEGER FOREIGN KEY references normal_user,
  id_playlist integer FOREIGN KEY REFERENCES playlist
);

--new_releases_by_genre table --
CREATE TABLE new_releases_by_genre (
  id_music integer FOREIGN KEY REFERENCES music,
  id_genre integer FOREIGN KEY REFERENCES genre
);

--playlists_trends_by_genre table--
CREATE TABLE playlists_trends_by_genre (
  id_playlist INTEGER FOREIGN KEY references playlist,
  id_genre INTEGER FOREIGN KEY references genre
);