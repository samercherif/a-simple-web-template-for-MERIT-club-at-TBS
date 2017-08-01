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
		      			<label for="event">
		      				<span class="required">Event</span> 
		      				<select id="event" tabindex="4" value="event" name="event">
		      		 			<option value="default">Choose an event</option>
			      		 			<?php

				      		 			$query = "SELECT event_n FROM events;";
										$result = mysqli_query($connection,$query);

										if(!$result)
										{
											echo "There is a problem with your request, check your query";
										}
										else
										{
			
										$numr = mysqli_num_rows($result); 

										if($numr == 0){
											echo "<script type=\"text/javascript\">
											alert('no entry found')</script>";
											}     
					         			while($line = mysqli_fetch_array($result))
										{			
					    					echo"<option name='event'>".$line['event_n']."</option>";
										}
				    				?>
			    			</select>
		      			</label> 
					</div>
					<div>
						<button name="b1" type="submit">Delete</button>
					</div>
					</form>
				<?php 
						if(isset($_POST['b1']))
						{
							$event=$_POST['event'];
							$query="DELETE FROM events WHERE event_n='$event';";
							$result=mysqli_query($connection,$query);
							if($result)
							{
								echo $event." event deleted sucessfully";
							}
							else
							{
								echo "An error occured! Please try again.";
							}
						}
					}
									?>

								

			</div>	
	</div>
</div>
</body>
</html>