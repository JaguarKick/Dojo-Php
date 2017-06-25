<html>
	<head>
		<title>HTML Special Char Demo</title>
	</head>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<input type="submit" name="submit" value="Click Here">
</form>
</html>
