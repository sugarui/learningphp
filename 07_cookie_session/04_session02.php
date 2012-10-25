<html>
	<?php
	//session_save_path('./session');
	session_start();
	echo $_SESSION['title']."<br>";
	echo $_SESSION['subtitle']."<br>";
	
	echo "session id name is"."<br>";
	echo session_id()."<br>";
	
	echo "session file content is"."<br>";
	echo file_get_contents('./session/sess_'.session_id());
	?>
</html>