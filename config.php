<?php
$connection = new mysqli("localhost","root","","sunrise");

// Check connection
if ($connection->connect_errno) {
  echo "Không thể kết nối với SQL" . $connection->connect_error;
  exit();
}
?>
