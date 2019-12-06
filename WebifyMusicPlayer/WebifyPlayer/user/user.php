
<?php
/*INSERT USER IN DATABASE*/
function insertUser($username, $nick, $password)
{
  global $dbh;
  $query = 'INSERT INTO normal_user VALUES(?,?,?,?)';
  $stmt = $dbh->prepare($query);
  $stmt->execute(array(NULL, $username, $nick, sha1($password))); //NULL AUTOINCREMENTS ID
  
}

/*SELECT USER IN DATABASE FOR LOGIN*/
function selectUser($username,$password)
{
  global $dbh;
  $query = "SELECT * FROM normal_user WHERE username = ? AND passwd = ?";
  $stmt= $dbh->prepare($query);
  $stmt->execute(array($username,$pasword));
  return $stmt->fetchAll(); // DESIRED VALUES RETURNED FROM DB
}

?>