<!DOCTYPE html>
<html lang="en-US">

  <head>
    <title>Webify</title>
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
          Profile Name
      </div>
    </header>

    <div id="sidebar-clone">
      <div id="sidebar">
        <ul>
          <!-- <li><a href="../loggedin/loggedin.html">Home</a></li>
          <li><a href="../search-log/search-log.html">Search</a></li>
          <li><a href="../mysongs/mysongs.html">My Songs</a></li>
          <li><a href="../playlists/playlists.html">Playlists</a></li>
          <li><a href="../home/home.html">Logout </a></li> -->

          <li><i class="fa fa-home"></i><a href="../loggedin/loggedin.html">Home</a></li>
          <li><i class="fa fa-search"></i><a href="../search-log/search-log.html">Search</a></li>
          <li><i class="fa fa-music"></i><a href="../mysongs/mysongs.html">My Songs</a></li>
          <li><i class="fa fa-archive"></i><a href="../playlists/playlists.html">Playlists</a></li>
          <li><i class="fa fa-power-off"></i><a href="../home/home.html">Logout </a></li>
        </ul>
      </div>
    </div>


    <!-- page content -->
    <!-- include textbox for searching songs, artists, playlists(?),.. -->
    <!-- should also include sidebar -->

    <form action="index.html" method="post">
      <input type="text" name="searchquery" placeholder="Type anything . . .">
      <input type="submit" value="Search">
    </form>

    <div id="initialtext">

      <h2>Search for anything</h2>
      <h3>artists, albums, songs,...</h3>
    </div>


  </body>
</html>