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
		      			<form method="post" action="">
		      				<table style="color: white; margin: auto;">
		      					<tr>
		      						<td>Username: </td>
		      						<td><input type="text" name="user"></td>
		      					</tr>

		      					<tr>
		      						<td>Password: </td>
		      						<td><input type="password" name="pass"></td>
		      					</tr>
		      				</table>
		      				<input type="submit" name="log" value="Log In">
		      			</form>
					</div>


				<?php 
				if(isset($_POST['log']))
					{
								$user = $_POST['user'];
								$pass = $_POST['pass'];

								$query = "SELECT* FROM user WHERE (username = '$user')
															AND(password = '$pass');";
								$result = mysqli_query($connection,$query);

								if(!$result)
								{
									echo "There is a problem with your request, check your query.";
								}
								else
								{
					
								$numr = mysqli_num_rows($result); 

								if($numr == 0)
									{
									echo "<script type=\"text/javascript\">
									alert('incorrect coordinations, please check the user table in the database')</script>";
									}
								else
								{
									header("Location: admin.php");
								}
							}
						}
									?>

								

			</div>	
	</div>
</div>
</body>
</html>