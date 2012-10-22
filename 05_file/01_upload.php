<html>
	<?php
	
	ini_set("display_errors","1"); 	
	//서버로 파일 업로드시 에러가 있다면 에러를 표시해라.(서버측에서 꺼놓은 에러기능을 켜는)
	//이 예제 외에서도 사용할 수 있음.
	
	$uploaddir='./'; //현재경로를말함. ( uploaddir, uploadfile 은 펑션은 아니고 그냥 a,b 로 해도 작동)
	
	$uploadfile=$uploaddir.basename($_FILES['uuuserfile']['name']); 
	//                     basename($path) : 
	
	//서버상에 저장할 경로와 이름 변수 uploadfile에 지정함.  
	//어떤경로(변수 uploaddir) 에 어떤이름 (함수 basename으로 추출한 이름)으로.
	
	//함수 basename 은, 파일 이름만 호출하는 함수이다.
	//FILES 는 전역변수임. 사용자가 업로드한 파일의 정보가 저장되어있는, 약속되어있는 변수. 
	//그리고 연관배열이고 이차원배열. 인자 중 키가 유유유저파일인 값은 어레이고 그중 네임키에 해당하는 것을 뽑아내는 듯하다. 
	//올린 파일이 여러개면 저 유저파일 네임 부분을 달리하면서 파일을 보내면 됨( html 에서 다른  name 값을, 여기서도 그이름을 키)
	
	echo "<pre>"; // 이건줄바꿈을해주나...
	
	//if(move_uploaded_file($filename, $destination)) {;}
	
	if(move_uploaded_file($_FILES['uuuserfile']['tmp_name'],$uploadfile)){
		echo "파일이 유효하고, 성공적으로 업로드 되었습니다.<br>";
		// move_uploaded_file은 함수.
		// 임시적으로 저장될 파일이, 최종적으로 저장되어야 할 곳에 저장됨.또 파일의 보안이슈를 체크함.
		// 인자 01 ['userfile']: 실제 저장되어있는 파일명
		// 인자 02 [tmp_name] : 실제로 파일이 서버에 저장될때는 루트 /tmp/xxxx 로 저장됨.
		
	}else{
		print "파일 업로드 공격의 가능성이 있습니다.<br>";
	}
	echo '자세한 디버깅 정보입니다:';
	print_r($_FILES); //배열안의 정보를 확인하고자 찍은 것.
	
	print "</pre>";
	
	
	// 잘안돼-폴더가 없어서 그런가... 엉엉 근데 ./로 현재폴더로해도 안대.
	// tmp-name 이란 키는 - 서버상의 루트의 템프에 저장되는 파일의 이름 키.
	// 저 FILE 에 저장된 값을 제어하는게 이 문서..
	
	
	
	?>
</html>