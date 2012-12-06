<?php

$a = "글로벌변수";

function sayhello1($name){
	global $a;
	return "{$name}님 {$a} 에 오신것을 환영합니다 <br>";
}
echo sayhello1('글로벌테스터');


function sayhello2($name){
	$a = '로컬변수';
	return "{$name}님 {$a} 에 오신것을 환영합니다 <br>";
}
echo sayhello2('로컬테스터');


function sayhello3($name){
	global $a;
	$a = '로컬변수';
	return "{$name}님 {$a} 에 오신것을 환영합니다 <br>";
}
echo sayhello3('믹스테스터-로컬이나중');


function sayhello4($name){
	$a = '로컬변수';	
	global $a;
	return "{$name}님 {$a} 에 오신것을 환영합니다 <br>";
}
echo sayhello4('믹스테스터-글로벌이나중');

?>