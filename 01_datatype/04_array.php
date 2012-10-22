<html>
	<?php
	
	echo 'p01'.'<p>';
	
		$a=array(1,3,6,9);
		
		print_r('print_r :');
		print_r(' ');
		print_r($a);
		
		echo '<br>';
		echo 'echo :'.' '.$a;
		
		echo '<br>';
		echo 'var_dump :'.' ';
		var_dump($a);
		
		
	
	echo '</p>'.'<br>';
	
	
	echo 'p02'.'<p>';
	
		$b=array(2,4,8,10);
		array_push($b,12);
		print_r($b);
	
	echo '</p>'.'<br>';
	
	
	echo 'p03'.'<p>';
	
		$c=array("foo"=>"paper", 12=>true);
		echo $c["foo"]; //paper
		echo '<br>';
		echo $c[12]; //1
	
	echo '</p>'.'<br>';
	
	
	echo 'p04'.'<p>';
		$d=array(
			"e"=>array(5=>6,7=>8,"a"=>9),
			"f"=>10
		);
		echo $d.'<br>';
		echo $d["e"].'<br>';
		echo $d["f"].'<br>';
		
		print_r($d);
		print_r('<br>');
		print_r($d["e"]);
		print_r('<br>');
	
		echo $d["e"][5].'<br>';//7
		echo $d["e"][7].'<br>'; //8
		echo $d["e"]["a"].'<br>'; //9	

	echo '</p>'.'<br>';
	
	?>
</html>