
<?php
/*INSERT USER IN DATABASE*/
function insertUser($email, $nick, $password)
{
  global $dbh;
  $query = "SELECT * FROM normal_user WHERE email='".$email."' OR nick_name = '".$nick."'";
  $stmt = $dbh->prepare($query);
  $stmt->execute();
  $count=$stmt->fetchColumn();
  
  if ($count == 0) { //NO ENTRANCE FOR THIS E-MAIL IN DATABASE
      $query = 'INSERT INTO normal_user VALUES(?,?,?,?)';
      $stmt = $dbh->prepare($query);
      $stmt->execute(array(null, $email, $nick, sha1($password))); //NULL AUTOINCREMENTS ID
      header('Location: ../home/home.php');
  }
  else //ERROR INSERTING IN DB -> ALREADY EXISTS THIS E-MAIL
  { 
    //echo ("<script>alert('E-mail already exists!.');</script>");
    echo ("<script>alert('E-mail or Username already exists!');setTimeout(\"location.href = '../register/register.php';\",100);</script>");
    //header('Location: ../HTML_CSS/register/register.php');

  }
}

/*SELECT USER IN DATABASE FOR LOGIN*/
function selectUser($email,$password)
{
  global $dbh;
  $query = "SELECT * FROM normal_user WHERE email = ? AND passwd = ?";
  $stmt= $dbh->prepare($query);
  $stmt->execute(array($email,sha1($password)));
  return $stmt->fetchAll(); // DESIRED VALUES RETURNED FROM DB
}

?>