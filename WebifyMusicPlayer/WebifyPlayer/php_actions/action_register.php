<?php
  /*DISPLAY ERRORS*/
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
  require_once('../config/init.php');
  require_once('../tools/user.php');
  
  $username = $_POST['username'];
  $nick = $_POST['nick'];
  $password = $_POST['password'];
  try {
    insertUser($username, $nick, $password);
    header('Location: ../HTML_CSS/home/home.html');
    exit;
  } catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
