<?php
	function test(){
		static $x = 45;
		$y = 1;
		$x++;
		$y++;
		echo "Value of X is $x<br>";
		echo "Value of Y is $y<br>";
		
	}
	test();
	test();
	test();
	test();
?>
