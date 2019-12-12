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
  <!-- TOP BAR -->
  <header>

    <img src="../../images/logo.png" alt="logo">
    <h1>Webify</h1>
    <div id="signup">
      <?php $id = $_GET['nickname'];
      echo ($id); ?>
    </div>

  </header>

  <!-- page content -->

  <div id="sidebar-clone">
    <div id="iconmenu">
      <ul>
        <li><i class="fa fa-home"></i><a href="../loggedin/loggedin.php">Home</a></li>
        <li><i class="fa fa-search"></i><a href="../search-log/search-log.php">Search</a></li>
        <li><i class="fa fa-music"></i><a href="../mysongs/mysongs.php?id=<?=$_GET['id'];?>&nickname=<?=$_GET['nickname'];?>"> My Songs</a></li>
        <li><i class="fa fa-archive"></i><a href="../playlists/playlists.php">Playlists</a></li>
        <li><i class="fa fa-power-off"></i><a href="../home/home.php">Logout </a></li>
      </ul>
    </div>
  </div>


  <div id="content">

    <div id="coverart">
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      require_once('../../config/init.php');
      require_once('../../tools/db_queries_album.php');

      $ID = $_GET['id'];
      $nickname = $_GET['nickname'];
      $album = get_album_by_id($ID);
      $songs = get_songs_in_album($album['nome_album'], $ID);
      $info = get_album_and_artist_info($ID);

      ?>
      <img src="<?= $album['img_path'] ?>" alt="artist_img">
      <div> <?= $info['name'] ?> </div>
    </div>

    <ul>

      <?php foreach ($songs as $song_name) { ?>
        <li> <?= $song_name['name_music'] ?> </li>

        <audio controls>
          <source src="../../music/drake/scorpion/Jaded.mp3" type="audio/ogg">
        </audio>
        <form action="../php_actions/action_mysongs.php?id=<?=$ID?>&nickname=<?=$nickname?>&id_music=<?=$song_name['id']?>" id="form" method="post">
          <input type="submit" value="Add to MySongs">
        </form>

      <?php } ?>

    </ul>

  </div>


</body>

</html>