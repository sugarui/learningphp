<?php
ini_set("display_errors","1");
include_once('./01_db.php');
if(!empty($_POST['aaa'])){
$sql = 'INSERT INTO `table01` (`name`, `create`) VALUES (\' '.mysql_real_escape_string($_POST['aaa']).' \', NOW())';	
$result=mysql_query($sql);
if(!$result){
	$message = 'error is :'.mysql_error()."\n";
	$message .= 'query was : '.$sql;
	die($message);
	}
}
?>
<html>
	<body>
		<form action="./03_user.php" method="post" >
	 		<label>User name</label><input type="input" name="aaa" />
	 		<input type="submit" />	 	 
		</form>
<?php
	 $sql='SELECT * FROM `table01` ORDER By id DESC LIMIT 10';
	 $result=mysql_query($sql);
	 while($row=mysql_fetch_array($result)){
	 	echo HTMLSPECIALCHARS( "{$row['id']} , {$row['name']} , {$row['create']}" )."<br/>";
	 }	 
?>

</body>	
</html>

<!--
		 
	 한텀씩 밀리네. 위쪽 php 가 실행된 (입력된) 걸 동시에 여기 아래쪽에서 불러오지는 못하나. 
	 >>>!!!! 아래에서 row를 한번 따로 먼저 선언한게 문제였다. 왜인진 정확히 모르겠지만.
	 
	 리소스, 어레이 출력해본 코드.
	 $result =mysql_query('SELECT * FROM `learn01` ORDER By id DESC LIMIT 10');
	 echo '$result itself returns ::::: '.$result;
	 echo "<br>";
	 
	 $row=mysql_fetch_array($result);
	 echo '$row itself is mysql_fetch_array($result), and it returns ::::: '.$row; 
	 echo "<br>"; 
-->

