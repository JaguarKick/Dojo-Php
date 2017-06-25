<html>
	<head>
		<title>Games Library</title>
	</head>
<form action="GamesLibrary.php" method="post">
<table>
	<tr>
		<td>Game Title</td>
		<td><input type=text name=txtName></td>
	</tr>
	<tr>
		<td>Platform</td>
		<td>
			<input type=radio name="platform" value="PC">
			<input type=radio name="platform" value="PS3">
			<input type=radio name="platform" value="XBox 360">
			<input type=radio name="platform" value="PS4">
			<input type=radio name="platform" value="XBox One">
		</td>
	</tr>
	<tr>
		<td>Genre</td>
		<td><select name="genre"><option>FPS<option>RPG<option>Racing<option>Sports<option>Fighting</select>
	</tr>
	<tr>
		<td colspan=2><input type="submit" name="submit" value="Add to Library">
	</tr>
</table>
</form>
<?php
	if(count($_POST['submit'])!=0){
		echo "Game title : ".$_POST['txtName']."<BR>";
		echo "Platform   : ".$_POST['platform']."<BR>";
		echo "Genre	 : ".$_POST['genre']."<BR>";
	}
?>
</html>


