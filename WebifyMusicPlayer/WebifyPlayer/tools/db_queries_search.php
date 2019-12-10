<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*REQUIRES TO RUN CORRECTY PHP SCRIPT*/

function searchForArtist($search){
  global $dbh;
  $query = "SELECT distinct name from artist join album join music on artist.id=album.id_artist and artist.id=music.id_artist and music.id_artist=album.id_artist and music.id_album=album.id where artist.name= ? or nome_album= ? or name_music=?";
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetch();
}

function get_album_image($search){
  global $dbh;
  $query = "SELECT distinct img_path from artist join album join music on artist.id=album.id_artist and artist.id=music.id_artist and music.id_artist=album.id_artist and music.id_album=album.id where artist.name=? or nome_album=? or name_music=?" ;
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetchAll();
}

function searchForAlbum($search){
  global $dbh;
  $query = "SELECT distinct nome_album from artist join album join music on artist.id=album.id_artist and artist.id=music.id_artist and music.id_artist=album.id_artist and music.id_album=album.id where artist.name=? or nome_album=? or name_music=?" ;
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetchAll();
}

function searchForMusic($search){
  global $dbh;
  $query = "SELECT distinct name_music from artist join album join music on artist.id=album.id_artist and artist.id=music.id_artist and music.id_artist=album.id_artist and music.id_album=album.id where artist.name=?or nome_album=? or name_music=? ";
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetchAll();
  }
