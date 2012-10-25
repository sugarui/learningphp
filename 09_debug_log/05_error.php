<html>
	<?php
	$a=array(5,6,7);
	error_log(var_export($a,1));
	// >>에러로그>>직접에러로그로 메세지를 보낼수도 있다.
	
	/*
	에러로그는 이렇게 찍혔다
	[error] [client 192.168.0.86] array (\n  0 => 5,\n  1 => 6,\n  2 => 7,\n)
		
	인자값은 이렇다
	error_log($message);
	error_log(var_export($expression));
	
	var_export()는 인자가 객체라면 읽을 수 있는 형식으로 전환한다. 문자를 리턴한다. 근데 배열이 객체야?
	변수안에 어떤값이 들어있는가 알아야할때 요긴하다. 얘내 둘이 같이 자주쓰인다.
	*/ 
	?>
</html>
