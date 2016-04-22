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
      echo "Deleting your event now... ";

      include ("connectDb.php");



      $sql = "DELETE FROM eventinfo WHERE userID = '$userID' AND event_name = '$EventName'"


      $result = mysql_query($sql);


      if ($result==1){
            echo ' <br> <font color="#00FF00"> Event deleted! </font> ';
            sleep(3);
            echo '<form id="autologin" action="member.php" method="post">';
            echo "<input type='hidden' name='userID' value=$userID />";
            echo '</form>';
            echo '<script language="javascript">';
            echo 'document.getElementById("autologin").submit();';
            echo '</script>';
      } else
                echo ' <br> <font color="#FF0000"> <b><i> Error. Please Try Again. </b></i></font>';        

      mysql_close($conn);

 ?>      