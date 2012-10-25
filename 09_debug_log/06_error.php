<html>
	<?php
	if(true){
		error_log('error happens at true condition');;
	}else{
		error_log('error happens at false condition');
	}
	// >>에러로그>>프로그램의 상태를 체크할수있다
	// (바덤프와 비슷하게 쓰이는데 메세지를 에러로그파일로 보내는점이 특징인 거 같다...)
	?>
</html>