<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*REQUIRES TO RUN CORRECTY PHP SCRIPT*/

function get_all_albums_from_trends(){
  global $dbh;
  $stmt=$dbh->prepare('SELECT * FROM trends join album where id=id_album');
  $stmt->execute();
  return $stmt->fetchAll();
}

function get_album_by_id($id){
  global $dbh;
  $stmt=$dbh->prepare('SELECT * FROM album where id= ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}

function get_songs_in_album($name,$albumid){
  global $dbh;
  $stmt=$dbh->prepare('SELECT * FROM album join music where album.nome_album= ? and  id_album= ?');
  $stmt->execute(array($name,$albumid));
  return $stmt->fetchAll();
}

 ?>
