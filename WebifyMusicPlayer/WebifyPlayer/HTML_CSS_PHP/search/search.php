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
