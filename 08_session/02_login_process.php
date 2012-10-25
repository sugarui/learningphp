<html>
	<?php
	session_start();
	$id='sugarui';
	$pwd='sugaruipassword';
	if(!empty($_POST['idid']) && !empty($_POST['pwdpwd'])){
		if($_POST['idid']==$id && $_POST['pwdpwd']==$pwd){
			$_SESSION['islogin']=true;
			$_SESSION['nick']='sugaruinick';
			echo "Login succeed";
			echo $_SESSION['nick'];
			header('Location: ./03_session_use.php');
			exit;
		}else{
			echo "Login Failed : You've entered your id and password, but something is wrong";
		}
	}else{ 
		echo "Login Failed <br>";
	}
	?>
</html>