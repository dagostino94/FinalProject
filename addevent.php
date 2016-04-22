<html>
<head>
<title>Event Creation</title>
</head>
<body>

<?php

      //get variables
      $EventName = $_POST["event_name"];
      $Description = $_POST["event_description"];
      $Date = $_POST["event_date"];
      $Time = $_POST["event_time"];
      $Location = $_POST["event_location"];
      $Host = $_POST["event_host"];
      $userID = $_POST["userID"];


      include ("readDb.php");

      //update information now
      echo "Creating your event now... ";

      include ("connectDb.php");
      $count = 0; 


      $Event_name_query = "SELECT * FROM eventinfo WHERE userID = '$userID'"; //check table name
      $Event_name_result = mysql_query($Event_name_query);


        while($eventinfo_row = mysql_fetch_array($Event_name_result)){

            if($eventinfo_row["event_name"] == $EventName){
            $count++;
            } 
     
      	}


        if ($count ==0){
        $sql = "INSERT INTO eventinfo (event_name, event_description, event_date, event_time, event_location, event_host, userID) VALUES ('$EventName', '$Description','$Date', '$Time', '$Location', '$Host', '$userID')";
        $result = mysql_query($sql);
      }

      	if ($result==1 && $count == 0){
      	    echo ' <br> <font color="#00FF00"> Event ADDED! </font> ';
            sleep(3);
            echo '<form id="autologin" action="member.php" method="post">';
            echo "<input type='hidden' name='userID' value=$userID />";
            echo '</form>';
            echo '<script language="javascript">';
            echo 'document.getElementById("autologin").submit();';
            echo '</script>';
      } 



		else if($count > 0){
		echo '<br> An event with the same name already exists. Please choose a new name and resubmit the form. </br>'; 
		sleep(3);
		echo '<form id="autologin" action="member.php" method="post">';
        echo "<input type='hidden' name='userID' value=$userID />";
		echo '</form>';
		echo '<script language="javascript">';
		echo 'document.getElementById("autologin").submit();';
		echo '</script>';
      }
      else {
       	echo ' <br> <font color="#FF0000"> <b><i> Error. Please Try Again. </b></i></font>';
                } 	

      mysql_close($conn);

 ?>











