
<?php
function insertUser($username, $nick, $password)
{
  global $dbh;
  $id = 7;
  $stmt = $dbh->prepare('INSERT INTO normal_user VALUES(?,?,?,?)');
  $stmt->execute(array($id, $username, $nick, sha1($password)));
}
?>