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
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        require_once('../../config/init.php');
        require_once('../../tools/db_queries_user.php');
        $id = $_GET['id'];
        $nickname = selectUserNickfromID($id);
        echo($nickname[0]['nick_name']);?> 
      </div>

  </header>

    <!-- page content -->

    <div id="sidebar-clone">
      <div id="iconmenu">
        <ul>
          <li><i class="fa fa-home"></i><a href="../loggedin/loggedin.php?id=<?=$_GET['id']?>">Home</a></li>
          <li><i class="fa fa-search"></i><a href="../search-log/search-log.php?id=<?=$_GET['id']?>">Search</a></li>
          <li><i class="fa fa-music"></i><a href="../mysongs/mysongs.php?id=<?=$_GET['id']?>"> My Songs</a> </li>
          <li><i class="fa fa-archive"></i><a href="../playlists/playlists.php?id=<?=$_GET['id']?>"> My Playlists</a></li>
          <li><i class="fa fa-folder"></i><a href="../myalbums/myalbums.php?id=<?=$id ?>">My Albums</a></li>
          <li><i class="fa fa-power-off"></i><a href="../home/home.php">Logout </a></li>
        </ul>
      </div>
    </div>


    <div id="rest">

        <article>
            <!-- artists -> songs or just songs? -->
            <h2>Trending Albums</h2>
            <ul>
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                require_once('../../config/init.php');
                require_once('../../tools/db_queries_album.php');

                $all_albums = get_all_albums_from_trends();

                $count = 1;

                foreach ($all_albums as $album) {

                    $album = get_album_by_id($count++);
                    ?>

                    <li>
                        <a href="../artist-log/artist-log.php?id_album=<?=$album['id']?>&id_user=<?=$_GET['id']?>">
                            <img src="<?= $album['img_path'] ?>" alt="artistcover">
                            <div>
                                <?= $album['nome_album'] ?>
                            </div>
                        </a>
                    </li>


                <?php } ?>





        </article>



        <article>
            <!-- artists -> songs or just songs? -->
            <h2>TEst</h2>
            <ul>


                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist1
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist2
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist3
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist4
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist5
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist6
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist7
                        </div>
                    </a>
                </li>

            </ul>

        </article>

        <article>
            <!-- artists -> songs or just songs? -->
            <h2>idk</h2>
            <ul>


                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist1
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist2
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist3
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist4
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist5
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist6
                        </div>
                    </a>
                </li>



                <li>
                    <a href="../artist-guest/artist-guest.php">
                        <img src="../../images/albumcover.png" alt="artistcover">
                        <div>
                            Artist7
                        </div>
                    </a>
                </li>

            </ul>

        </article>

    </div>


</body>

</html>
