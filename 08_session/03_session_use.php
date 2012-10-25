<!DOCTYPE html>
<html>
	<head>
		<title>welcome page</title>
	</head>
	<body>	
		<?php
		session_start();
		if(!isset($_SESSION['islogin'])){
			header('Location:./01_login.html');
		}
		?>
		<p>
			01. Welcome message is ::::: <br>
			<?php echo $_SESSION['nick']; ?> , welcome!
		</p>
		<p>
			02. Session id is ::::: <br>
			<?php 
			session_start();
			echo session_id();
		    ?>
		</p>
		<p>
			03. Session file content is ::::: <br>
			<?php 
			session_start();
			$se_file='./session/sess_'.session_id();
			echo file_get_contents($se_file);
		    ?>
		</p>
		<p>
			04. Test file content is ::::: <br>
			<?php
	    	$file='../05_file/sample.txt';
			echo file_get_contents($file);
			?>
		</p>
		<p>
			<a href="./04_logout.php">로그아웃</a>	
		</p>
	</body>
</html>