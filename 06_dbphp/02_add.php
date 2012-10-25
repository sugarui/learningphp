<html>
	<?php
	 ini_set("display_errors","1");
	 include_once('./01_db.php');
	 
	 $sql=" INSERT INTO`learn01` (`name`, `create`) values (\"seangco\", NOW() ) "; 
	 // 네임의 밸류는 꼭 ''로 싸줘야
	 // 외따옴표 쿼리의 내부 인자에 이스케이핑 쌍따옴표를 할수없다.
	 // 외따옴표 쿼리의 내부 인자에 이스케이핑 외따옴표를 쓸수있다.
	 // 쌍따옴표 쿼리의 내부 인자에 이스케이핑 외따옴표를 쓸수..없다
	 // 쌍따옴표 쿼리의 내부 인자에 이스케이핑 쌍따옴표를 쓸수있다.
	 	 
	 $result=mysql_query($sql);
	 
	 if(!$result){
	 	$message = 'error is :'.mysql_error()."\n";
		$message .= 'query is : ' . $sql; //  이거 뭘까 이거..
		die  ($message);
	 }else{
	 	$sql='SELECT * FROM `learn01` WHERE name=\'seangco\' ORDER BY id DESC LIMIT 10';
		// 위쪽  sql 은 이스케이핑 하는데 얘는 왜 안해도 괜찮을까
		// 정확히 어떻게 안하냐면,
		// 쌍따옴표 쿼리 내부에 이스케이핑안한 외따옴표 쓰면 괜찮다
		// 외따옴표 쿼리 내부에 이스케이핑안한 쌍따옴표 쓰는것도 괜찮다
		// 단 여기도 같은 (쌍따 속 쌍따, 외따 속 외따) 는 안된다
		// 이스케이핑하면 괜찮다.		
		// 위에서 쌍따옴표로 선언해도 외따옴표로 호출할수있다.
		
		$result=mysql_query($sql);

		while($row=mysql_fetch_array($result)){
			echo "{$row['id']} , {$row['name']} , {$row['create']} <br>";	
		}
	 }
	?>
</html>