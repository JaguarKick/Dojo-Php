<html>
	<form action="RequestMethodDemo.php" method="post">
		<input type="submit" name="submit" value="Click Here">
	</form>
</html>
<?php
	echo $_SERVER['REQUEST_METHOD'];
?>

