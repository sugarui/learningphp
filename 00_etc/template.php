<html>
	
	<style type="text/css">
		div.area{
			height: 30px;
		}
	</style>
	
	<?php
	echo 1;
	echo '<div class="area"></div>';
	echo 2;
	
	?>
</html>

------------------------------

<html>
	<?php
	
	?>
</html>


------------------------------


<html>
	<head>
		<link type="text/css" href="../css/style.css">
	</head>
	
	<body>
	<?php
	echo '<div class="area"></div>';
	?>	
	</body>
</html>

---


//괴상함을 정리하면
-""내에 변수를 삽입할 때 {} 없어도 변수가 잘 나옴
>> 이 예제에서는 꼭 넣어야 되더라. 안그러면 넣은 앞에것도 안나옴.
	<html>
		<?php
			if($_GET['mode']=='intro'){
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
		?>
	</html>
-\n, \r 작동안함

//팁을 정리하면
-이스케이핑은 바깥쪽과 같은 기호여야 가능함.
-html 에서는 소문자 method="post" , php 에서는 대문자 $_POST 여야 에러안남.