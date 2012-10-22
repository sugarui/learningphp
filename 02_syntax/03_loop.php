<html>
	
	<style type="text/css">
		div.area{
			height: 30px;
		}
	</style>
	
	<?php
	
	//for 
			$a=array('html','css','javascript','php','mysql');
			for($i=0; $i<count($a); $i++){
				echo $a[$i];
				echo "<br>";
			}
				
		echo '<div class="area"></div>';
		
			$b=array('html','css','javascript','php','mysql','webservice');
			for($i=0; $i<count($a); $i++){ // conunt a still works here
				echo "index{$i} : {$b[$i]} \n";
			}
			
		echo '<div class="area"></div>';
	
	//foreach - 연관배열에서 특히우
			$c=array('course'=>'coding', 'lecture'=>'php', 'difficulty'=>'easy');
			foreach($c as $z=>$y){
				echo "$z : $y <br>"; 
				echo "{$z} : {$y} <br>"; 
				// 이건좀 특이하네, {}대괄호로 변수를 감싸지 않는게.
				// 감싸도 되고 안 감싸도되고.. ㅠㅠ 스애앰.
				//$key, $value 대 $z, $y 로 바꿔도 ()내부와 {}로직에서 이름이 맞으면 작동함
			}
			
		echo '<div class="area"></div>';
		
			$d=array('course'=>'codng', 'lecture'=>'php', 'difficulty'=>'easy');
			foreach($c as $key=>$value){
				echo "{$key} : {$value} <br>"; // 한번 {}대괄호로 변수를 감싸봤음.
			}
	
	
	?>
</html>