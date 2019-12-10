<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Webify</title>
  <link rel="icon" type="image/gif/png" href="../../images/logo.png">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="layout.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
  <!-- TOP BAR -->
  <!-- should contain login and register html pages? -->
  <header>
    <img src="../../images/logo.png" alt="logo">
    <h1>Webify</h1>
    <div id="signup">
      <a href="../register/register.html">Register</a>
      <a href="../login/login.html">Login </a>
    </div>
  </header>

  <div id="sidebar-clone">
    <div id="sidebar">
      <ul>
        <li><i class="fa fa-home"></i><a href="../home/home.html">Home</a></li>
        <li><i class="fa fa-search"></i><a href="../search/search.html">Search</a></li>
      </ul>
    </div>
  </div>

  <!-- page content -->
  <!-- include textbox for searching songs, artists, playlists(?),.. -->
  <!-- should also include sidebar -->

  <form action="search_query.php" method="post">
    <input type="text" name="searchquery" placeholder="Type anything . . .">
    <input type="submit" value="Search">
  </form>

  <div id="initialtext">

    <h2>Artists</h2>
    <div id="artists">
      <?php
      /*DISPLAY ERRORS*/
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
      require_once('../../config/init.php');
      require_once('../../tools/db_queries_search.php');
      require_once('../../tools/db_queries_album.php');

      $search = $_POST['searchquery'];
      $query=searchForArtist($search);
      ?>

      <?=$query['name']?>

    </div>






    <h3>Albums</h3>
    <div id="albums">
      <?php
      /*DISPLAY ERRORS*/
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
      require_once('../../config/init.php');
      require_once('../../tools/db_queries_search.php');
      require_once('../../tools/db_queries_album.php');

      $search = $_POST['searchquery'];

      $all_albums = searchForAlbum($search);
      $count=0;
      foreach ($all_albums as $album) {

        $album = get_album_by_id($all_albums[$count++]['id_album']);
        ?>

        <li>
            <a href="../artist-guest/artist-guest.php?id=<?= $album['id'] ?>">
                <img src="<?= $album['img_path'] ?>" alt="artistcover">
                <div>
                    <?= $album['nome_album'] ?>
                </div>
            </a>
        </li>


    <?php } ?>








    </div>

    <h4>Songs</h4>
    <div id="songs">
      test-songs
    </div>
  </div>

  <?php
  /*DISPLAY ERRORS*/
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  /*REQUIRES TO RUN CORRECTY PHP SCRIPT*/
  require_once('../../config/init.php');
  require_once('../../tools/db_queries_search.php');
  $search = $_POST['searchquery'];
  try {
    $result_artist = searchForArtist($search);
    $result_album_id = searchForAlbum($search);
    $result_music = searchForMusic($search);
    echo ($result_artist[0]['autor']);
    echo ($album_id = $result_album_id[0]['id_album']);
    echo ($result_music);
  } catch (Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
  }
  ?>

</body>

</html>
