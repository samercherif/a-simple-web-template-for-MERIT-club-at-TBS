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
					<div>
						<table style="color: white; margin: auto;">
							<tr>
								<td>Event Name: </td>
								<td><input type="text" name="name"> </td>
							</tr>
							<tr>
								<td>Coach Name: </td>
								<td><input type="text" name="coach"> </td>
							</tr>
							<tr>
								<td>Description: </td>
								<td><input type="text" name="desc"> </td>
							</tr>
							<tr>
								<td>Date: </td>
								<td><input type="date" name="date"> </td>
							</tr>
						</table>						
 
					</div>
					<div>
						<button name="b1" type="submit">Add</button>
					</div>
					</form>
				<?php 
						if(isset($_POST['b1']))
						{
							$name=$_POST['name'];
							$coach=$_POST['coach'];
							$desc=$_POST['desc'];
							$date=$_POST['date'];
							$query="INSERT INTO events VALUES('$name','$coach','$desc','$date');";
							$result=mysqli_query($connection,$query);
							if($result)
							{
								echo $name. " event added successfully";
							}
							else
							{
								echo "An error occured! Please try again.";
							}
						}
					
									?>

								

			</div>	
	</div>
</div>
</body>
</html>