<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*REQUIRES TO RUN CORRECTY PHP SCRIPT*/

function searchForArtist($search){
  global $dbh;
  $query = "SELECT * from artist where artist.name= ? ";
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search));
  return $stmt->fetch();
}

function searchForAlbum($search){
  global $dbh;
  $query = "SELECT distinct artist FROM album join music on album.artist=music.autor and album.id=music.id_album where music.name_music= ? OR album.artist = ? OR album.nome_album = ? " ;
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetchAll();
}

function searchForMusic($search){
  global $dbh;
  $query = "SELECT distinct artist FROM album join music on album.artist=music.autor and album.id=music.id_album where music.name_music= ? OR album.artist = ? OR album.nome_album = ? ";
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search));
  return $stmt->fetchAll();
  }
