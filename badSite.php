<?php

	if( isset($_GET["username"])) {
		echo "<p><b>Hi ", $_GET["username"] , "</b></p>";
		echo "<P>Welcome back!</p>";
      echo "<p>Remember: don't share your password!</p>";
		exit();
	}
?>

<!-- inspired by a live overflow video -->

<html>
   <head>
      <link type="image/x-icon" href="/LAMP/testSite/public_html/favicon.ico" rel="icon" />
   </head>

   <body>
      <p>
         <b> Hi wats up? </b>
      </p>
      <p>
         ready to log in?
      </p>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         username: <input type="text" name="username" />
         password: <input type="text" name="password" />
         <input type="submit" />
      </form>
   </body>
</html>