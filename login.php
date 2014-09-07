<?php
session_unset();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Please log in</title>
    </head>
    <body>
        <?php
        include "header.php";
        ?>
      <form method="post" action="movie1.php">
          <p>Enter username:
              <input type="text" name="user">
          </p>
          <p>Enter password:
              <input type="password" name="pass">
          </p>
          <p>
              <input type="submit" name="Submit" value="Submit">
          </p>
      </form>
        <?php
        include "footer.php";
        ?>
    </body>
</html>

