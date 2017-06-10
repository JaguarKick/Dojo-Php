<?php
	$x = 45;
	$y = 92;
	function test(){
		global $x;
		$x++;
		$y = 98;
		echo "Value of X is $x<br>";
		echo "Value of Y is $y";
	}
	test();
	echo "<br>Value of Y is $y";
?>
