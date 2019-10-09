<?php

  $host = 'localhost';
  $dbname = 't9tohe00';
  $username = 't9tohe00';
  $password = 'Zakkeus1984';

 $conn = mysqli_connect($host,$dbname,$username,$password);

 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else {
   echo ”OK”;
 }

 ?>
