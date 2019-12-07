<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*REQUIRES TO RUN CORRECTY PHP SCRIPT*/

function get_all_albums(){
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

 ?>
