<html>
	<head>
		<title>FormDemo3</title>
	</head>
<form action="FormDemo3.php" method="POST">
Name : <input type="text" name="txtName"><br>
Email : <input type="text" name="txtEmail"><br>
<input type="submit" name="submit" value="Click Here">
</form>
<?php
	if(count($_POST)!=0){
		echo "Name : ".$_POST["txtName"]."<BR>";
		echo "Email : ".$_POST["txtEmail"]."<BR>";
	}
?>
</html>
