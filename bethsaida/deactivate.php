<?php
  require 'connect.php';
  $x = $_GET['getid'];
  $sql = "UPDATE users SET bs_stat= 1 WHERE bs_uniqid='$x'";
  $z = $conn->query($sql);
  if ($z) {
    $conn->close();
    header ('Location:adminindex.php');
  } else {
    echo "Error";
    exit();
  }
?>