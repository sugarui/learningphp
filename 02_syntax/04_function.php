<html>
	<style type="text/css">
		div.area{
			height: 30px;
		}
	</style>
	
	<?php
		
			function sayhello($name){
			    return "{$name} ! hihi !";
			}
			echo sayhello('suagrui');

		echo '<div class="area"></div>';
				
			function sayhello2($name2){
				return "{$name2} ! hihi 2 !";
			}
			echo sayhello2("sugarui 2");
		
		echo '<div class="area"></div>';
		
			$a="codingeverybody";
			
			function sayhello3($name3){
				global $a;
				return "{$name3} ! hihi 3 ! Welcome to {$a} !";
			}
			echo sayhello3(); //  오 인자가 없어도 빈 채로 실행이 되는군 
			
		echo '<div class="area"></div>';
			
			function sayhello4($name4){
				$a;
				return "{$name4} ! hihi 4 ! Welcome to {$a} !";
				// 펑션내 글로벌에이를 선언안하거나 그냥에이를 선언하면 - a 자리가 빈칸됨
			}
			echo sayhello4("sugarui 4")
	?>
</html>