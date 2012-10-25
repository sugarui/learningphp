<html>
	<?php
	ini_set("display_errors", "1");
	$host="localhost";
	$username="root";
	$password="bitnami";
	$dbname="learningdbphp";
		
	$link=mysql_connect($host, $username, $password);
	if(!$link){
		die('Access to the MySQL FAILED because: '. mysql_error());
	}else{
		echo "Access OK to MYSQL<br>";
	}
		
	$dbselected=mysql_select_db($dbname,$link);
	if(!$dbselected){
		die ('Access to the Database FAILED because : '.mysql_error());
	}else{
		echo "Access OK to the database \"{$dbname}\" <br>";
	}
		
	?>
</html>