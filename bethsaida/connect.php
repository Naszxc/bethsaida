<?php
 $conn = new mysqli("localhost","root","","db_bethsaida");
  if ($conn->errno) {
  	  echo "Error Connection: " . $conn->error;
  	  exit();
  }
?>