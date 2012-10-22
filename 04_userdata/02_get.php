<html>
	<?php
		if($_GET['mode']=='intro'){  // get 은 전역변수
			echo "this is intro";
		}else if($_GET['mode']=='course'){
			echo "this is course";			
		}else if($_GET['mode']=='module'){
			if($_GET['id']==1){
				echo "module number 1";
			}else if($_GET['id']==2){
				echo "{$_GET['mode']} number {$_GET['id']}";
			}
		}
		
	/*겟은 동적인 페이지 생성,  url 교환, 캐쉬이용에 좋다.
	*/
	?>
</html>

