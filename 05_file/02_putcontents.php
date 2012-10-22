<html>
	<head>
		<link type="text/css" href="../css/style.css">
	</head>
	<body>
	파일다루기 예제 2.<br>
	<div class="area"></div>
	<ul>
		<li>file_put_contents : 문자열을 파일에 저장한다.</li>
		<li>
			<a href="http://docs.php.net/manual/kr/function.file-put-contents.php">
			'file_put_contents' 함수 레퍼런스</a>
		</li>
		<li>
	    	<a href="http://docs.php.net/manual/kr/function.fwrite.php">
			'fwrite' 함수 레퍼런스 </a>
		</li>
	</ul>
	<div class="area"></div>
		
		
		
		
		
	<?php
	echo '----------------------<br>';
		
		
	$file='./sample3.txt'; // 로컬변수라서 앞의 예제와 이름 겹쳐도 상관없겠지
	file_put_contents($file,'풋컨텐츠<br>'); //더하는게 아니라 좀 바꾸는거구나.
	echo file_get_contents($file);
	?>
	
	
	
	
	</body>
</html>