<?php
session_start();
$_SESSION['username']= $_POST['user'];
$_SESSION['userpass']= $_POST['pass'];
$_SESSION['authuser']=0;
//check user had pass info
if(($_SESSION['username']== 'Joe') and ($_SESSION['userpass']=='12345'))
{
    $_SESSION['authuser']=1;
}
 else {
echo "Sorry you don't have the permission to view this page!"    ;
exit();
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Find my fav movie</title>
    </head>
    <body>
        <?php
        
        include "header.php";
        
      $myfavmovie= urlencode("ma3x");
      echo "<a href='moviesite.php?favmovie=$myfavmovie'>";
      echo "click here to see info about my fav movie </a><br>";
     // echo "<a href='moviesite.php?sorted=true'> Click here to see my top 10s, sorted alphabetically </a><br>";
      echo "Or choose how many movies you would like to see: <br>";
        ?>
        <form method="post" action="moviesite.php">
            <p>Enter number of movies up to 10 :
                <input type="text" name="num"><br>
                check here if you want to sort alphabetically :
                <input type="checkbox" name="sorted">
            </p>
            <input type="submit" name="Submit" value="Submit">
        </form>
        <?php
        include "footer.php";
        ?>
    </body>
</html>
