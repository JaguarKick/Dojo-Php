<html>
	<head>
		<title>Form validation</title>
	</head>
<?php
	function cleanInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<form action="FormValidation.php" method="post">
Student Name : <input type="text" name="studName"><br>
Email Address : <input type="text" name="emailAddress"><br>
<input type="submit" name="submit" value="Click Here">
</form>
<?php
	if(count($_POST)!=0){
		echo "Student Name : ".cleanInput($_POST['studName'])."<BR>";
		echo "Email Address : ".cleanInput($_POST['emailAddress'])."<BR>";
	}
?>
</html>
