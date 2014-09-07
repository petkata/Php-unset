<?php
session_start();
//check to see if user has logged in 
if($_SESSION['authuser']!=1)
{
    echo "Sorry you don't have the permission to view this page!"    ;
    exit();
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>my movie site - <?php echo $_GET['favmovie']; ?></title>
    </head>
    <body>
        <?php
        
        include "header.php";
      $favmovies=array("Ma3x","Film 2","3 Film","MIlm 4","5","SHEST","сЕдем","Batman 8","NINE","Of 10")  ;
      if (isset($_GET['favmovie']))
      {
      echo "Welcome ";
      echo $_SESSION['username']."!<br>";
      echo "My fav movie is ".$_GET['favmovie']."<br>";
      $movierate=5;
      echo "My movie rate is ".$movierate;
      }
      else {
          echo "My top ".$_POST['num']." are: <br>";
          if(isset($_GET['sorted']))
              sort ($favmovies);
      }
      //list the movies
      $numlist=1;
      while ($numlist <= $_POST['num']) {
          echo $numlist.". ".  pos($favmovies);
          next($favmovies);
          echo "<br>";
          $numlist=$numlist+1;
      }
      
        ?>
        
    </body>
</html>

