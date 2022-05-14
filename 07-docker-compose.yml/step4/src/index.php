<?php 
header("content-type: text");
$host = "db";
$username = "root";
$password = "my-secret-pw";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_errno > 0) {
	echo $conn->connect_error;
} else {
  echo "DB Connection successful\n\n";
}
?>
