<!DOCTYPE html>
<html lang="en-US">

<head>
  <title> Webify </title>
  <link rel="icon" type="image/gif/png" href="../../images/logo.png">
  <meta charset="UTF-8">
  <link href="style.css" rel=stylesheet>
  <link href="layout.css" rel=stylesheet>
  <link href="responsive.css" rel=stylesheet>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <img src="../../images/logo.png" alt="logo">
    <h1>Webify</h1>
    <div id="signup">
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      require_once('../../config/init.php');
      require_once('../../tools/db_queries_user.php');
      $id = $_GET['id'];
      $nickname = selectUserNickfromID($id);
      echo ($nickname[0]['nick_name']); ?>
    </div>
  </header>
  <? $id = $_GET['id']; ?>
  <div id="sidebar-clone">
    <div id="iconmenu">
      <ul>
        <li><i class="fa fa-home"></i><a href="../loggedin/loggedin.php?id=<?= $id ?>">Home</a></li>
        <li><i class="fa fa-search"></i><a href="../search-log/search-log.php?id=<?= $id ?>">Search</a></li>
        <li><i class="fa fa-music"></i><a href="../mysongs/mysongs.php">My Songs</a></li>
        <li><i class="fa fa-folder"></i><a href="../myalbums/myalbums.php?id=<?= $id ?>">My Albums</a></li>
        <li><i class="fa fa-power-off"></i><a href="../home/home.php">Logout </a></li>
      </ul>
    </div>
  </div>



  <div id="cont">
    <h2>My Albums</h2>
    <ul>
      <?php
      /*DISPLAY ERRORS*/
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
      require_once('../../config/init.php');
      require_once('../../tools/db_queries_album.php');


      #$searchmusic = $_POST['searchquery'];
      $id = $_GET['id'];
      $allalbums = selectMyAlbums($id);


      $count = 0;
      foreach ($allalbums as $album) {

        //$album = get_album_by_id($all_albums[$count++]['nome_album']);
        $album = $allalbums[$count]['nome_album'];
        ?>

        <li>
          <a href="../artist-guest/artist-guest.php?id=?>">

            <div>
              <?= $album ?>
            </div>
          </a>
        </li>


      <?php
        $count++;
      }
      ?>

    </ul>
  </div>

</body>

</html>