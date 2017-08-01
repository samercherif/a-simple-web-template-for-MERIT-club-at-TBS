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
					<table style="margin: auto; width: 100%;">
					<tr>
		      			<td><button name="submit_event" type="submit" id="get_event">SELECT</button></td>
		      			<td><button name="manage_event" type="submit" id="get_event">MANAGE</button></td>
		      		</tr>
		      		</table>
					</div>
				</form>

				<?php 
				if(isset($_POST['submit_event']))
					{
								$event = $_POST['event'];

								$query = "SELECT event_co,event_des,event_t FROM events WHERE event_n='$event'";
								$result = mysqli_query($connection,$query);

								if(!$result)
								{
									echo "There is a problem with your request, check your query.";
								}
								else
								{
					
								$numr = mysqli_num_rows($result); 

								if($numr == 0){
								echo "<script type=\"text/javascript\">
								alert('no entry found')</script>";
								}
								else
								{
									?>
									<table style="border: solid 1px white;" id="event_table">
										<tr>
											<th style="border-bottom: solid 1px white;" colspan="3"><?php echo $event; ?></th>
										</tr>
										<tr>
											<th>Coach Name</th>
											<th>Event Description</th>
											<th>Date</th>
										</tr>	
									<?php
									while($line=mysqli_fetch_array($result))
									{
										echo "
										<tr>
												<td>".$line['event_co']."</td>
												<td>".$line['event_des']."</td>
												<td>".$line['event_t']."</td>
												</tr>";
									}
									echo "</table>";
									}	
									}
								}
								elseif (isset($_POST['manage_event'])) 
								{
									header('Location: log.php');
								}

					}
					?>
			</div>	
		
	</div>
</div>
</body>
</html>