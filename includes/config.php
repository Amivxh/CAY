<!-- dit is de connectie met de database --> 
<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'careaboutyou';
 // Make the connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
