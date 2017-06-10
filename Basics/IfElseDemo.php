<?php
	$n1 = 45;
	$n2 = 12;
	$n3 = 56;
	if($n1>$n2){
		if($n1>$n3){
			echo "$n1 is the greatest.";
		} else {
			echo "$n3 is the greatest.";
		}
	} else if($n2>$n3){
		echo "$n2 is the greatest.";
	} else {
		echo "$n3 is the greatest.";
	}
?>
