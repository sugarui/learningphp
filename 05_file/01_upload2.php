<html>
	<?php
	
	ini_set("display_errors","1"); 	
		
	$a='./'; 	                                 //이렇게 안써도됨.. 경로가 안기니까.
	$b=$a.basename($_FILES['uuuserfile']['name']); //이렇게 안써도됨.. 경로가 안기니까.
	
	  //$xx.basename($path) : 경로에서 파일 이름만 호출.	
	$c='./'.basename($_FILES['uuuserfile']['name']);  // 아래 무브업로드의 데스티네이션의 인자로 값을직접줘도 작동. 
	
	echo "<pre>"; // 이건줄바꿈을해주나...
	
   //if(move_uploaded_file($filename,$destination)) {;}
	if(move_uploaded_file($_FILES['uuuserfile']['tmp_name'], 
						  './'.basename($_FILES['uuuserfile']['name']))
	  )
	{
		echo "파일이 유효하고, 성공적으로 업로드 되었습니다.<br>";
		// move_uploaded_file은 함수.
		// 임시적으로 저장될 파일이, 최종적으로 저장되어야 할 곳에 저장됨.또 파일의 보안이슈를 체크함.
		// 인자 01 ['userfile']: 실제 저장되어있는 파일명
		// 인자 02 [tmp_name] : 파일이 서버에 저장되어있는 이름  >  이거 그냥네임으로하니까 엘스로 갔었음.
		// 그러니까 파일네임, 저장할 경로를 써준거네.
		
		
	}else{
		print "파일 업로드 공격의 가능성이 있습니다.<br>";
	}
	echo '자세한 디버깅 정보입니다:';
	print_r($_FILES); //배열안의 정보를 확인하고자 찍은 것.
	
	print "</pre>";
		
	?>
</html>