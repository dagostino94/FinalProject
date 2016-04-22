<?php
$userID = $_POST["userID"];
$name = $_POST["name"]; 
//Link to create new event page
echo "<td><a href='createevent.php'> Create a new event </a></td>": 

//Display a user's upcoming events
echo "<html>"; 
echo "<title> GuestList - " .$name. "'s profile </title>"; 
echo "<div class = upcoming_events>"
echo "<table>"
echo "<th>Name</th>";
echo "<th>Date</th>";
echo "<th>Time</th>";
echo "<th>Location</th>";
echo "<th>Host</th>";


//JavaScript popu with QR Code
//Fill the table
include("connectDb.php"); 

echo "<form class = 'sendData' action = 'member.php' method = 'post'>"; 
echo "<td><input type='hidden' name='userID' value = $userID></td>";
echo "<td><input type='hidden' name='name' value = $userfname></td></form>";

		              $user_query = "SELECT * FROM ridersdb WHERE Email = '$email' ";
		              $user_result = mysql_query($user_query);

		              $event_query = "SELECT * FROM tripinfo WHERE Email = '$email'"; 
		              $event_result = mysql_query($event_query);

		              $user_row = mysql_fetch_array($user_result); 

		              $user_Name = $user_row["name"]; 

		              while($user_row_eventinfo = mysql_fetch_array($user_result)){

		              echo "<TR>";
		              echo "<TD ALIGN=CENTER> ".$user_Name." </TD>";
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["TripName"]." </TD>"; //checkname of table headers with will
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["Origin"]." </TD>";
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["Destination"]." </TD>";
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["dDate"]." </TD>";
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["dTime"]." </TD>";
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["Hascar"]." </TD>";
		              echo "<TD ALIGN=CENTER> ".$user_row_eventinfo["Seats"]." </TD>";
		              echo "</TR>";

		              }
		              //End while loop// 
		              echo "</TABLE></CENTER>";
                      echo "<br><br>";



?>