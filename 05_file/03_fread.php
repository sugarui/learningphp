<html>
	<?php
	
	$a="./sample.txt";
	
	 //fopen($filename, $mode);
	$b=fopen($a,"r");
	
	 //fread($handle, $length);
	$c=fread($b,filesize($a));
	
	echo $c;
	
	fclose($b);
	
	?>
</html>