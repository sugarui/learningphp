<html>
	<?php
	
	$a="sample3.txt";
	$b=fopen($a,"a"); // 얘가 쓰는 건 아니고. 이건 모드임.
	$x=fopen($a,"r"); // (오픈이 중복으로 될러나... 되네)
	
	//if(is_writable($a)){ // 얘가 쓰는것도 아님. 이건 체크임.	
		//if(!$b=fopen($a, "a")){
		//	echo "Cannot open file \"{$a}\" ";
		//	exit;
		//}	
		if(fwrite($b, '에프라이트<br>') === FALSE){ // 얘가 쓰네?! 
		    // 이런이프는 또 첨이다.
		    // 실행해서 false 인지 아닌지만 체크하는 앤 줄 알았는데
		    // false 면 { } 하고, 아니면 실행 해버리는거냐. 
			echo "Cannot write file \"{$a}\" ";
			exit;
		}
		//echo "Success, wrote \"blarblar\" to file {$a}";
		//echo file_get_contents($a);  // 아니다 이 예제에서 이건 아니지
		$z=fread($x, filesize($a));
		echo $z;
		fclose($b);
		
		$g=1;
		if($g++ === false){
			echo "g++isfalse";
		}
		echo $g; // ++된 2를 출력. 앞선 if의 g++을 실행함.
		
		$h=1;
		if($h*2 === false){
			echo "same"; 
		}else{
		echo $h; // 원래의 1을 출력
		echo $h*2; // 2를 출력, 이 수식이 문제있는것은 아님
		}
		
		$i=1;
		if($i*2 == 2){
			echo "same as two"; //곱한 값이 2로써 같았으므로 실행됨
			echo $i; //근데 이건 그대로 1
		}
		
		
		
	//}else{
	//	echo "The file {$a} is not writable";
	//}
	
	
	/*
	$c=fwrite($b, 'blarblar');
	echo $c;
	*/
	
	?>
</html>