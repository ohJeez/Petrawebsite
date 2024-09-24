<?php
  $con = mysqli_connect('localhost', 'root', '', 'petra');
  
  if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
  }
?>
