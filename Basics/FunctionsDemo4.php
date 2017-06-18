<?php
	function increaseNum(&$num){
		$num++;
		$num++;
		$num++;
	}

	$n = 45;
	echo "Before increment : $n<br>";
	increaseNum($n);
	echo "After increment  : $n<br>";
?>

