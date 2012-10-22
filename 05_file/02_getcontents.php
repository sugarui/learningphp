<html>
	<head>
		<link type="text/css" href="../css/style.css">
	</head>
	<body>
	파일다루기 예제 1.<br>
	<div class="area"></div>
	<ul>
		<li>file_get_contents : 텍스트로 이루어진 파일을 읽어서, 문자열을 리턴한다.</li>
		<li>
			<a href="http://docs.php.net/manual/kr/function.file-get-contents.php">
			'file_get_contents' 함수 레퍼런스 </a>
		</li>
		<li>
	    	<a href="http://docs.php.net/manual/kr/function.fread.php">
			'fread' 함수 레퍼런스</a>
		</li>
	</ul>
	<div class="area"></div>





	<?php
	echo '----------------------<br>';
	
	
	$file='./sample.txt';
	
	echo file_get_contents($file);
	?>



			
	</body>
</html>