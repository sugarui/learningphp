<html>
	<?php
	ini_set("display_errors", "1");
	$host="localhost";
	$username="root";
	$password="bitnami";
	$dbname="db01";
	// 이렇게 다 적어놓아도 서버 자체에 접속하는 권한은 안적혀있으니 괜찮겠지? 서버접속은 터미널에서 쳐서하잖아.	
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