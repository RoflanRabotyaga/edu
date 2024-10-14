<?php 
  include_once 'classes/Favorites.class.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>We recommend</title>
  <meta charset="utf-8" />
  <style>
    header {
      border-bottom: 1px solid black;
      text-align: center;
      width: 80%
    }
    
    div#a,
    div#b,
    div#c {
      width: 30%;
      height: 200px;
      float: left
    }
  </style>
</head>

<body>
  <header>
    <h1>We recommend</h1>
  </header>
  <?php
    $fav = new Favorites();
  ?>
  <div id='a'>
    <h2>Useful sites</h2>
    <ul>
      <?php
      foreach($fav->getFavorites('getLinksItems') as $name){
          foreach ($name as $site)
              echo '<li><a href="' . $site[1] . '">' . $site[0] . '</a></li>';
      }
      ?>
    </ul>
  </div>
  <div id='b'>
    <h2>Useful apps</h2>
    <ul>
      <?php
      foreach($fav->getFavorites('getAppsItems') as $name){
          foreach ($name as $app)
              echo '<li><a href="' . $app[1] . '">' . $app[0] . '</a></li>';
      }
      ?>
    </ul>
  </div>
  <div id='c'>
    <h2>Useful articles</h2>
    <ul>
      <?php
      foreach($fav->getFavorites('getArticlesItems') as $name){
          foreach ($name as $article)
              echo '<li><a href="' . $article[1] . '">' . $article[0] . '</a></li>';
      }
      ?>
    </ul>
  </div>
</body>

</html>