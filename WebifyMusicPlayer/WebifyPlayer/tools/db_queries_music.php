<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*REQUIRES TO RUN CORRECTY PHP SCRIPT*/

function insertMySong($id_user,$id_music){
    
    global $dbh;
    $query = "SELECT * FROM liked_musics WHERE id_user = ? and id_music= ? ";
    $stmt = $dbh->prepare($query);
    $stmt->execute(array($id_user,$id_music));
    $count=$stmt->fetchColumn();
  
    
    
    if ($count == 0) { //NO ENTRANCE FOR THIS E-MAIL IN DATABASE
        $query = 'INSERT INTO liked_musics VALUES(?,?)';
        $stmt = $dbh->prepare($query);
        $stmt->execute(array($id_user, $id_music)); //NULL AUTOINCREMENTS ID
    }
    else //ERROR INSERTING IN DB -> ALREADY EXISTS THIS SONG
    { 
      //echo ("<script>alert('E-mail already exists!.');</script>");
      echo ("<script>alert('You allready add this song to MySongs');setTimeout(\"location.href = '../register/register.php';\",100);</script>");
      //header('Location: ../HTML_CSS/register/register.php');
  
    }
}


function selectMySongs($id_user){
    
    global $dbh;
    $query = "SELECT music.name_music FROM music, liked_musics WHERE music.id = liked_musics.id_music AND liked_musics.id_user = ?";
    $stmt = $dbh->prepare($query);
    $stmt->execute(array($id_user));
    $count=$stmt->fetchColumn();
    return $stmt->fetchAll();
}