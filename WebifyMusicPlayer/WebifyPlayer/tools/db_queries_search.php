<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*REQUIRES TO RUN CORRECTY PHP SCRIPT*/

function searchForArtist($search){
  global $dbh;
  $query = "SELECT autor FROM music where name_music = ? OR autor = ? OR name_album = ?";
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetchAll();
}

function searchForAlbum($search){
  global $dbh;
  $query = "SELECT id_album FROM album join music where autor = ? OR nome_album = ? OR name_music = ?" ;
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search,$search,$search));
  return $stmt->fetchAll();
}

function searchForMusic($search){
  global $dbh;
  $query = "SELECT name_music FROM music where name_music = ?";
  $stmt=$dbh->prepare($query);
  $stmt->execute(array($search));
  return $stmt->fetchAll();
  }