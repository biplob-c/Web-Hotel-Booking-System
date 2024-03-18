<?php
  $conn = new mysqli('localhost', 'root', '', 'db_hotel_management');

  if ($conn->connect_error) {
      die("Connection failed!");
  }
?>