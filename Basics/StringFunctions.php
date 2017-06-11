<?php
	$text = "This is a simple text";
	echo "String : $text<br>";
	echo "Length : ".strlen($text);
	echo "<br>No of words : ".str_word_count($text);
	echo "<br>Reverse of text : ".strrev($text);
	echo "<br>Search of simple in the text : ".strpos($text,"simple");
	echo "<br>Replacing simple with complicated : ".str_replace("simple","complicated",$text);
?>
