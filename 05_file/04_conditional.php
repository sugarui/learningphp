<html>
	<head>
		<style type="text/css">
			div.area{
				height: 30px;
			}
		</style>
	</head>
	
	<body>
	
	<h2>omg 01. (g++) runs itself</h2>

		<?php
		$g=1;
		if($g++ === false){
			echo "g++ is false <br>";
		}else{
		echo $g.'<br>'; // ++된 2를 출력. 앞선 if의 g++을 실행함. 
		                // ++가 특이한듯, 이건 함수인듯 !!!!! fwrite 도 함수였지 !!!!!
		                // 근데 여기서 g++ 해도 그대로 2다? 3이 아니고? 헐.
		}
		?>	

	<div class="area"></div>
	
	<h2>02. (h*2) skips the conditonal (false), and not runs itself either.</h2>

		<?php	
		$h=1;
		if($h*2 === false){
			echo "same <br>"; 
		}else{
		echo $h   .'<br>'; // 원래의 1을 출력
		echo $h*2 .'<br>'; // 2를 출력, 그러니까 이 수식이 문제있는것은 아님
		}
		?>

	<div class="area"></div>
	
	<h2>03. (i+10) runs the conditional (true), but keeps it's first value</h2>
	
		<?php		
		$i=1;
		if($i+10 == 11){
			echo "same as 11 <br>"; //곱한 값이 2가 되어서 우항의 2와 같았으므로 실행됨
			echo $i.'<br>'; // 근데 이건 그대로 1
		}
	?>

	<div class="area"></div>

	</body>
</html>