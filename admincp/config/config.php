<?php
$mysqli = new mysqli("localhost","root","","disan");

// Check connection
if ($mysqli->connect_errno) {
  echo "Không thể kết nối với SQL" . $mysqli->connect_error;
  exit();
}
?>