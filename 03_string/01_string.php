<html>
	
	<style type="text/css">
		div.area{
			height: 30px;
		}
	</style>
	
	<?php
	echo '<div class="area"></div>';
	echo "문자열은 단따옴표, 쌍따옴표를 사용해서 표기한다".'<br>';
	echo 'hello world'.'<br>';
	echo "hello world";
	
	echo '<div class="area"></div>';
	echo "단따옴표나 쌍따옴표 자체를 표기할때는 백슬래쉬를 사용한다".'<br>';
	echo 'hello \'world\''.'<br>';
	echo "hello \"world\"";
	
	echo '<div class="area"></div>';
	echo "줄바꿈을 할때는 쌍따옴표 안에서 /n, /r을 사용한다".'<br>';
	echo 'hello world \n';  // 줄바꿈이 안되고 기호기 나와버릴거야
	echo 'aaa'.'<br>';
	echo "hello world\n";  // 줄바꿈이 될거야..엥 기호는 안나오지만 안되는데????????
	echo 'aaa'.'<br>';
	echo "hello world{\n}";  // 중괄호안에 넣어보면.. 안되네..
	echo 'aaa'.'<br>';
	echo "hello world\r";  // r을써보자.. 안되네..
	echo 'aaa'.'<br>';
	 
	echo '<div class="area"></div>';	
	echo "문자열 안에서 변수를 사용하려면 /"/" 안에서 {}를 사용한다.".'<br>';
	$a= array('hello','world');
	echo '생활코딩의 공식인사는 {$a[0]} {$a[1]} 입니다.'.'<br>'; // 아마 기호가 그대로 나와버릴걸
	echo "생활코딩의 공식인사는 {$a[0]} {$a[1]} 입니다.".'<br>'; // 아마 잘나올거야
	echo "생활코딩의 공식인사는 \'{$a[0]} {$a[1]}\' 입니다.".'<br>'; //  이건 이스케이핑이 잘 안되네
	echo "생활코딩의 공식인사는 \"{$a[0]} {$a[1]}\" 입니다.".'<br>'; 
	//  안팎이 같은 기호면 이스케이핑이 되네 그렇다면
	echo '생활코딩의 공식인사는 \"hello world\"입니다.'.'<br>'; //이건 안되고 
	echo '생활코딩의 공식인사는 \'hello world\'입니다.'.'<br>'; //이건 되고
	
	
	echo '<div class="area"></div>';
	echo "문자와 문자를 더할때는 마침표를 쓴다".'<br>';
	$a="생활"; //근데 a가 두번선언되면어쩌나보자 > 됨. 그냥 후선언된게 $a가 된건가. ㅇㅇ.그러함.
 	$b="코딩";
	echo $a.$b;  // 생활코딩
	
	echo '<div class="area"></div>';
	echo '생활코딩의 공식인사는 {$a[0]} {$a[1]} 입니다.'.'<br>'; // ..기호가 나오네. 인덱스 0따위 없는거.
		
	
	?>
</html>