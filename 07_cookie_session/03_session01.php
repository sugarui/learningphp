<html>
	<?php
	//session_save_path('./session'); 
	//세션정보를 모든페이지에서 가져오고 싶을때 어디에 그 파일을 저장할것인지에 대한것임.
	//근데 난 이걸 달면 다른 문서에서 $_SESSION 이 작동이 안돼.
	session_start();
	$_SESSION['title']='codingeverybody rocks';
	$_SESSION['subtitle']='$_SESSION variable works';
	?>
	
</html>