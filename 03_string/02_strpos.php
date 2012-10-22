<html>
	
	<style type="text/css">
		div.area{
			height: 30px;
		}
	</style>
	
	<?php
	$mystring='abc';
	$findme='a';
	$findpos=strpos($mystring,$findme);
	
	if($findpos===false){
		echo "'$findme' 문자열을 '$mystring' 문자열에서 찾지 못했습니다";
	}else{
		echo "'$findme' 문자열을 '$mystring' 문자열에서 찾았습니다".'</br>';
		echo " 위치 $findpos 에 존재합니다.".'</br>';
	}
	
	echo '<div class="area"></div>';
	echo "문자열 테스트입니다".'</br>';
	
	echo '<div class="area"></div>';
	echo "'$findme'".'</br>';
	echo "{$findme}".'</br>';
	echo "$findme".'</br>';
	
	echo '<div class="area"></div>';
	echo "'$findpos'".'</br>';
	echo "{$findpos}".'</br>';
	echo "$findpos".'</br>';
	
	//헐 모두 정상적으로 출력되는데 왜 중괄호 써주라고 그러신거지???????

	
	?>
</html>