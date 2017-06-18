<?php
	function nameList(...$names){
		foreach($names as $n){
			echo $n."<br>";
		}
	}
	nameList("Sam","James","John","Jimmy","June");
?>
