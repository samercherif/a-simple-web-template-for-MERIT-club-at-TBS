<!DOCTYPE html>
<html>
<head>
	<title>Trainings</title>
	<link rel="stylesheet" type="text/css" href="other.css">
	<link rel="stylesheet" type="text/css" href="training.css">
	<?php require('connection.php'); ?>
</head>
<body>
<div id="plan">
	<div id="content">
		<div id="bgcolor"></div>
		<div id="nav">
			<div id="menu">
				<ul id="home"><a href="index.html">HOME</a></ul>
				<ul id="about"><a href="about.html">ABOUT MERIT</a></ul>
				<ul id="training"><a href="training.php">TRAININGS</a></ul>
				<ul id="team"><a href="team.html">TEAM</a></ul>
			</div>
		</div>
		<div id="contact-form">
			<form method="post" action="">           
					<table style="margin: auto; width: 100%;">
					<tr>
		      			<td><a href="add.php" style="text-decoration: none"><input type="button" name="add" value="Add"></a></td>
		      			<td><a href="edit.php" style="text-decoration: none"><input type="button" name="edit" value="Edit"></a></td>
		      			<td><a href="delete.php" style="text-decoration: none"><input type="button" name="delete" value="Delete"></a></td>
		      		</tr>
		      		</table>
					</div>
				</form>	
		</div>	
	</div>
</div>
</body>
</html>