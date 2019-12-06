<?php
  /*DISPLAY ERRORS*/
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
  require_once('./config/init.php');
  require_once('./user/user.php');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  try {
    $user_data = selectUser($username, $nick, $password); //RETURNS FOR $user_data db information for this user
    header('Location: ./login/login.html');
    exit;
  } catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}