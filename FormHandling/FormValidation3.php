<html>
	<head>
		<title>Some school</title>
	</head>
<?php
	$nameErr=$rollNoErr=$subjectErr="";
	$name=$rollNo=$subject="";
	if(count($_POST)!=0)
	{
		if($_POST['studName']=="")
			$nameErr="Your name is required.";
		else
			$name=$_POST['studName'];
		if($_POST['rollNo']=="")
			$rollNoErr="Roll no is required.";
		else
			$rollNo = $_POST['rollNo'];
		if($_POST['subject']=="")
			$subjectErr="Subject is required.";
		else
			$subject=$_POST['subject'];
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method=post>
Your name : <input type="text" name="studName" value="<?php echo $name;?>"><?php echo $nameErr;?><br>
Roll No : <input type="text" name="rollNo" value="<?php echo $rollNo;?>"><?php echo $rollNoErr;?><br>
Subject : <input type="text" name="subject" value="<?php echo $subject;?>"><?php echo $subjectErr;?><br>
<input type="submit" name="submit" value="ClickHere">
</form>
</html>
