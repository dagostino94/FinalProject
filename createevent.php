<?php
$userID = $_POST["userID"];
$name = $_POST["name"];  

?>
<html> 
	<style> 
	</style> 
	<body>

		<div class = "event_form"> 
			<form action = "addevent.php" method = "post">
				<table>
					<tr><td> <input type='hidden' name='userID' value=$userID /> </td></tr>
					<tr><td> <input type='hidden' name='name' value=$name /> </td></tr>
					<tr><td>Event Name</td><td><input type = "text" name ="event_name"></td></tr>
					<tr><td>Description</td><td><input type = "text" name ="event_description"></td></tr>
					<tr><td>Date</td><td><input type = "date" name ="event_date"/></td></tr>
					<tr><td>Time</td><td><input type = "time" name ="event_time"/></td></tr>
					<tr><td>Location</td><td><input type = "text" name ="event_location"/></td></tr>
					<tr><td>Host</td><td><input type = "text" name ="event_host"/></td></tr>
				</table>
					<br><input type='submit' value='Create your Event!'><br>
			</form>
		</div>




	</body> 