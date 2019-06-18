<?php session_start();#This will start the session ?>

<link rel="stylesheet" href="css/style.css">

<?php
	session_unset();   #Session_unset and Session_destroy
	session_destroy();	#Will remove all sessions.
	echo "<title>Terima kasih</title>";
	echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
	echo "<center><img src='img/ajax-loader.gif'></center><br />";
	echo "<META http-equiv=\"refresh\" content=\"2;URL=login.php\">";
?>

