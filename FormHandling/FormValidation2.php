<html>
	<head>
		<title>Some school</title>
	</head>
<?php
	$nameErr=$rollNoErr=$subjectErr="";
	if(count($_POST)!=0)
	{
		if($_POST['studName']=="")
			$nameErr="Your name is required.";
		else
			echo $_POST['studName']."<BR>";
		if($_POST['rollNo']=="")
			$rollNoErr="Roll no is required.";
		else
			echo $_POST['rollNo']."<BR>";
		if($_POST['subject']=="")
			$subjectErr="Subject is required.";
		else
			echo $_POST['subject']."<BR>";
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method=post>
Your name : <input type="text" name="studName"><?php echo $nameErr;?><br>
Roll No : <input type="text" name="rollNo"><?php echo $rollNoErr;?><br>
Subject : <input type="text" name="subject"><?php echo $subjectErr;?><br>
<input type="submit" name="submit" value="ClickHere">
</form>
</html>
