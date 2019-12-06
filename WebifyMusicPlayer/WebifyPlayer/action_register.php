<?php
  /*DISPLAY ERRORS*/
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
  require_once('./config/init.php');
  require_once('./user/user.php');
  
  $username = $_POST['username'];
  $nick = $_POST['nick'];
  $password = $_POST['password'];
  //$nick = isset($_POST['nick']) ? $_POST['nick'] : '';
  try {
    insertUser($username, $nick, $password);
    header('Location: test.php');
    exit;
  } catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
