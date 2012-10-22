<html>
	
	<style type="text/css">
		div.area{
			height: 30px;
		}
	</style>
	
	<?php
			$a=array('html','css','javascript','php','mysql');
			for($i=0; $i<count($a); $i++){
				echo $a[$i];
				echo "<br>";
			}
				
		echo '<div class="area"></div>';
		
			$b=array('html','css','javascript','php','mysql','webservice');
			for($i=0; $i<count($a); $i++){ // conunt a still sorks here
				echo "index{$i} : {$b[$i]} \n";
			}
			
		echo '<div class="area"></div>';
	
			echo $c=array('course'=>'co-ev-bd', 'lecture'=>'php', 'difficulty'=>'easy');
			foreach($c as $key=>$value){
				echo "$key : $value <br>"; // 이건좀 특이하네, {}대괄호로 변수를 감싸지 않는게.
			}
	
	?>
</html>