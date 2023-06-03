<?php
$receivedToken = $_GET['token'];
$validToken = "eeeeee"; // Replace with your valid token

if ($receivedToken === $validToken) {
  echo "valid";
} else {
  echo "invalid";
}
?>
