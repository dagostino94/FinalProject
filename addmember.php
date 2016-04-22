<html>
<head>
<title>Event Creation</title>
</head>
<body>

<?php

      //get variables
      $TripName = $_POST["event_name"];
      $origin = $_POST["event_description"];
      $destination = $_POST["event_date"];
      $ddate = $_POST["event_time"];
      $dtime = $_POST["event_location"];
      $hascar = $_POST["event_host"];
      $email = $_POST["Email"];


      include ("readDb.php");

      //update information now
      echo "Creating your event now... ";

      include ("connectDb.php");
      $count = 0; 